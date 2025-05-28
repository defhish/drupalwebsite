<?php

namespace Drupal\graph_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\TempStore\PrivateTempStoreFactory;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GraphDisplayController extends ControllerBase
{

    /**
     * The tempstore service.
     *
     * @var \Drupal\Core\TempStore\PrivateTempStore
     */
    protected $tempStore;

    /**
     * Constructs a new GraphDisplayController.
     *
     * @param \Drupal\Core\TempStore\PrivateTempStoreFactory $tempStoreFactory
     *   The tempstore factory.
     */
    public function __construct(PrivateTempStoreFactory $tempStoreFactory)
    {
        $this->tempStore = $tempStoreFactory->get('graph_module');
    }

    /**
     * {@inheritdoc}
     */
    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('tempstore.private')
        );
    }

    /**
     * Displays the graph page.
     *
     * @return array
     *   A render array containing the graph.
     */
    public function display()
    {
        // Retrieve data from tempstore
        $graph_data = $this->tempStore->get('graph_data');

        if (empty($graph_data)) {
            return [
                '#markup' => $this->t('No graph data available. Please submit the form first.'),
                '#prefix' => '<div class="graph-message"><div class="messages messages--error">',
                '#suffix' => '</div></div>',
            ];
        }

        // Validate and process data points
        try {
            $data_points = array_map('trim', explode(',', $graph_data['data_points']));
            $numeric_points = array_map(function ($point) {
                $value = (float) $point;
                if (!is_numeric($point)) {
                    throw new \InvalidArgumentException('Non-numeric value detected');
                }
                return $value;
            }, $data_points);

            if (empty($numeric_points)) {
                throw new \InvalidArgumentException('No valid data points provided');
            }

            // Prepare render array
            $build = [];

            // Add container for the graph
            // In GraphDisplayController.php, change the container to canvas:
            $build['graph_container'] = [
                '#type' => 'container',
                '#attributes' => [
                    'id' => 'graph-container',
                    'class' => ['graph-container'],
                ],
                'canvas' => [
                    '#type' => 'html_tag',
                    '#tag' => 'canvas',
                    '#attributes' => [
                        'id' => 'graph-canvas',
                        'width' => '800', // Initial width
                        'height' => '400', // Initial height
                    ],
                ],
            ];

            $build['graph_type'] = [
                '#type' => 'select',
                '#title' => $this->t('Graph Type'),
                '#options' => [
                    'bar' => $this->t('Bar Chart'),
                    'line' => $this->t('Line Graph'),
                    'pie' => $this->t('Pie Chart'),
                ],
                '#default_value' => $graph_data['graph_type'],
                '#attributes' => [
                    'id' => 'graph-type-selector',
                ],
            ];

            // Add description
            $build['description'] = [
                '#markup' => $this->t('Visualization of your submitted data: @data', [
                    '@data' => implode(', ', $data_points),
                ]),
                '#prefix' => '<div class="graph-description">',
                '#suffix' => '</div>',
            ];

            // Attach library and pass data to JavaScript
            // In your GraphDisplayController.php, update the #attached section:
            $build['#attached'] = [
                'library' => [
                    'graph_module/graph_render',
                ],
                'drupalSettings' => [
                    'graphModule' => [
                        'data' => $numeric_points,
                        'type' => $graph_data['graph_type'],
                        'labels' => array_map(function ($i) {
                            return 'Data ' . ($i + 1);
                        }, array_keys($numeric_points)),
                    ],
                ],
            ];

            // Add cache context
            $build['#cache'] = [
                'contexts' => ['session'],
            ];

            return $build;

        } catch (\Exception $e) {
            return [
                '#markup' => $this->t('Error processing graph data: @error', [
                    '@error' => $e->getMessage(),
                ]),
                '#prefix' => '<div class="graph-message"><div class="messages messages--error">',
                '#suffix' => '</div></div>',
            ];
        }
    }
}

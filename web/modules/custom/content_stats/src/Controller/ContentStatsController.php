<?php

namespace Drupal\content_stats\Controller;

use Drupal\content_stats\Services\ContentStatisticsService;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ContentStatsController extends ControllerBase
{

    protected $contentStats;

    public function __construct(ContentStatisticsService $contentStats)
    {
        $this->contentStats = $contentStats;
    }

    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('content_stats.service')
        );
    }

    public function dashboard()
    {
        $stats = $this->contentStats->getAllContentTypeCounts();

        return [
            '#theme' => 'content_stats',
            '#stats' => $stats,
            '#attached' => [
                'library' => ['content_stats/content_stats'],
                'drupalSettings' => [
                    'contentStats' => [
                        'data' => array_column($stats, 'count'),
                        'labels' => array_column($stats, 'label'),
                        'colors' => $this->generateChartColors(count($stats)),
                    ],
                ],
            ],
        ];
    }

    protected function generateChartColors($count)
    {
        $colors = [];
        for ($i = 0; $i < $count; $i++) {
            $colors[] = sprintf('rgba(%d, %d, %d, 0.7)',
                rand(50, 200), rand(50, 200), rand(50, 200));
        }
        return $colors;
    }
}

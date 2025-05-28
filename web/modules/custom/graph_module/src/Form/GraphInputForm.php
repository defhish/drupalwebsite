<?php

namespace Drupal\graph_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\TempStore\PrivateTempStoreFactory;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GraphInputForm extends FormBase
{

    /**
     * The tempstore service.
     *
     * @var \Drupal\Core\TempStore\PrivateTempStore
     */
    protected $tempStore;

    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'graph_input_form';
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
     * Constructs a new GraphInputForm.
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
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['data_points'] = [
            '#type' => 'textarea',
            '#title' => $this->t('Enter your data points (comma separated)'),
            '#description' => $this->t(''),
            '#required' => true,
            '#attributes' => [
                'placeholder' => '',
            ],
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Generate Graph'),
            '#attributes' => [
                'class' => ['button--primary'],
            ],
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        $data_points = $form_state->getValue('data_points');
        $points = array_map('trim', explode(',', $data_points));

        foreach ($points as $point) {
            if (!is_numeric($point)) {
                $form_state->setErrorByName('data_points', $this->t('All values must be numeric. Invalid value: @value', ['@value' => $point]));
                break;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        try {
            $this->tempStore->set('graph_data', [
                'data_points' => $form_state->getValue('data_points'),
                'graph_type' => 'bar', // Hardcoded default
            ]);

            $form_state->setRedirect('graph_module.display');
        } catch (\Exception $e) {
            $this->messenger()->addError($this->t('Could not save graph data. Please try again.'));
            \Drupal::logger('graph_module')->error('Error saving graph data: @error', ['@error' => $e->getMessage()]);
        }
    }
}

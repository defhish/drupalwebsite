<?php

namespace Drupal\customer_feedback\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class InlineDropdownOptionsForm extends FormBase
{

    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'inline_dropdown_options_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $config = \Drupal::config('customer_feedback.settings');
        $options = $config->get('dropdown_options') ?? [];

        $form['dropdown_options'] = [
            '#type' => 'textarea',
            '#title' => $this->t('Dropdown Options'),
            '#description' => $this->t('Enter one option per line. These will appear in the public feedback form dropdown.'),
            '#default_value' => implode("\n", $options),
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Save Options'),
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $raw_input = $form_state->getValue('dropdown_options');
        $options = array_filter(array_map('trim', explode("\n", $raw_input)));

        \Drupal::configFactory()->getEditable('customer_feedback.settings')
            ->set('dropdown_options', $options)
            ->save();

        $this->messenger()->addStatus($this->t('Dropdown options updated.'));
    }

}

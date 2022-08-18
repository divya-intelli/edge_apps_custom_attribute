<?php

/**
 * @file
 * Contains Drupal\edge_apps_custom_attribute\Form\TeamsAppCustomAttributeMappingForm.
 */

namespace Drupal\edge_apps_custom_attribute\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configuration form builder for Apps custom attribue mapping settings.
 */
class AppCustomAttributeMappingForm extends ConfigFormBase {

  /**
   * The config named used by this form.
   */
  const CONFIG_NAME = 'edge_apps_custom_attribute.messages.config';

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [static::CONFIG_NAME];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'app_custom_attribute_mapping';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::CONFIG_NAME);

    $form['mapping'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Mapping field'),
      '#description' => $this->t('Enter one mapping per line, in the format: drupal field,edge field. For example:field_custom,QWERTY'),
      '#default_value' => $config->get('mapping'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config(static::CONFIG_NAME)
      ->set('mapping', $form_state->getValue('mapping'))
      ->save();
  }

}

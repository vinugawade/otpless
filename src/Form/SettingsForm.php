<?php

namespace Drupal\otpless\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure OTPLess settings for this site.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'otpless_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['otpless.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['active'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable OTPLess'),
      '#default_value' => $this->config('otpless.settings')->get('active'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('otpless.settings')
      ->set('active', $form_state->getValue('active'))
      ->save();
    parent::submitForm($form, $form_state);
  }

}

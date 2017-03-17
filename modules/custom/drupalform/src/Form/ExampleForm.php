<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.02.17
 * Time: 14:25
 */

namespace Drupal\drupalform\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ExampleForm extends ConfigFormBase {
  public function getFormId() {
    return 'drupalform_example_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['company_name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Company name'),
      '#default_value' => $this->config('drupalform.company')->get('company_name'),
    );
    $form['phone'] = array(
      '#type' => 'tel',
      '#title' => t('Phone'),
    );
    $form['email'] = array(
      '#type' => 'email',
      '#title' => t('Email'),
    );
//    $form['submit'] = array(
//      '#type' => 'submit',
//      '#value' => $this->t('Save'),
//    );
//    return $form;
      return parent::buildForm($form, $form_state);
  }

  protected function getEditableConfigNames() {
    return ['drupalform.company'];
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {

  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    // TODO: Implement submitForm() method.
    parent::submitForm($form, $form_state);
    $this->config('drupalform.company')->set('name', $form_state->getValue('company_name'));
  }
}

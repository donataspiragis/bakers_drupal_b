<?php
/**
 * @file
 * Contains \Drupal\belzabubasmodule\Form\BelzaForm
 */

namespace Drupal\belzabubasmodule\Form;

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class BelzaForm extends FormBase {
  public function getFormId()
  {
    return 'belza_form';
  }

  /**
   * @inheritDoc
   */
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $node = \Drupal::routeMatch()->getParameter('node');
    $nid = $node->nid->value;
    $form['text'] = [
      '#title' => t('Text'),
      '#type' => 'textarea',
      '#size' => 25,
      '#description' => t(""),
      '#required' => True,
    ];
    $form['test_ink'] = [
      '#type' => 'url',
      '#title' => $this->t('Link title'),
      '#url' => '',
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => t('Submit'),
    ];
    $form['nid'] = [
      '#type' => 'hidden',
      '#value' => $nid,
    ];
    return $form;
  }

  /**
   * @inheritDoc
   */
  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
  }
}

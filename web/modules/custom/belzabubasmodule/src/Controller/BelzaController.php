<?php

namespace Drupal\belzabubasmodule\Controller;

use Drupal\Core\Controller\ControllerBase;


class BelzaController extends ControllerBase {

  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => t('My menu link'),
    ];
  }

//  public function content() {
//    return [
//      '#type' => 'markup',
//      '#markup' => $this->t('Hello, World!'),
//      '#theme' => 'manotemp',
//      '#test_var' => $this->t('Test Value'),
//    ];
//  }

}

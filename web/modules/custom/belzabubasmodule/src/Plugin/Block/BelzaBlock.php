<?php

namespace Drupal\belzabubasmodule\Plugin\Block;
/**
 * @file
 * contains \Drupal\belzabubasmodule\Plugin\Block\BelzaBlock
 */
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * @Block(
 *   id = "Belza_Block",
 * admin_label = @Translation("Belza Form"),
 *   )
 */
class BelzaBlock extends BlockBase {


  public function build() {
    return \Drupal::formBuilder()->getForm('Drupal\belzabubasmodule\Form\BelzaForm');
  }
  public function blockAccess(AccountInterface $account)
  {
    $node = \Drupal::routeMatch()->getParameter('node');
    $nid = $node->nid->value;
    if(is_numeric($nid)){
      return AccessResult::allowedIfHasPermission($account, 'view belza_form');
    }
    return AccessResult::forbidden();
  }
//  public function defaultConfiguration() {
//    $default_config = \Drupal::config('belzabubasmodule.settings');
//    return [
//      'hello_block_name' => $default_config->get('hello.name'),
//    ];
//  }

}

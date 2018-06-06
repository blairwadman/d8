<?php

namespace Drupal\welcome\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class WelcomeController.
 */
class WelcomeController extends ControllerBase {

  /**
   * Welcome.
   *
   * @return string
   *   Return Hello string.
   */
  public function welcome() {
    $config = \Drupal::config('welcome.adminsettings');
    return [
      '#type' => 'markup',
      '#markup' => $this->t($config->get('welcome_message'))
    ];
  }

}

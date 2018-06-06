<?php

namespace Drupal\welcome\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'WelcomeBlock' block.
 *
 * @Block(
 *  id = "welcome_message",
 *  admin_label = @Translation("Welcome message"),
 * )
 */
class WelcomeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = \Drupal::config('welcome.adminsettings');
    $build = [];
    $build['welcome_message']['#markup'] = $config->get('welcome_message');

    return $build;
  }

}

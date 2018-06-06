<?php

namespace Drupal\welcome\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\welcome\Messages\MessageGenerator;

/**
 * Class WelcomeController.
 */
class WelcomeController extends ControllerBase {

  private $messageGenerator;

  public function __construct(MessageGenerator $messageGenerator) {
    $this->messageGenerator = $messageGenerator;
  }

  /**
   * Welcome.
   *
   * @return string
   *   Return Hello string.
   */
  public function welcome() {
    $service = $this->messageGenerator->getMessage();
    return [
      '#type' => 'markup',
      '#markup' => $service
    ];
  }

  public static function create(ContainerInterface $container) {
    $message = $container->get('message.generator');

    return new static($message);
  }


}

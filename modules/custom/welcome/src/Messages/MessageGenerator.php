<?php

namespace Drupal\welcome\Messages;

/**
 * Class MessageGenerator.
 */
class MessageGenerator {

  private $params;

  /**
   * Constructs a new MessageGenerator object.
   */
  public function __construct($params) {
    $this->params = $params;
  }

  public function getMessage() {
    $params = $this->params;
    $message_key = array_rand($params);
    $message = $params[$message_key];

    return $message;
  }

}

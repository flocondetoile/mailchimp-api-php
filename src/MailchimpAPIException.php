<?php

namespace Mailchimp;

use \Exception;

class MailchimpAPIException extends Exception {

  /**
   * @inheritdoc
   */
  public function __construct($message = "", $code = 0, Exception $previous = null) {
    $message_obj = json_decode($message);
    $message = $message_obj->status . ': ' . $message_obj->title . ' - ' . $message_obj->detail;

    parent::__construct($message, $code, $previous);
  }

}
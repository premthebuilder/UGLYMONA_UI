<?php namespace Acme\Exceptions;

class FormException extends \Exception{

  protected $errors;

  public function __construct($errors)
  {
    $this->errors = $errors;
  }

  public function getErrors()
  {
    return $this->errors;
  }

}
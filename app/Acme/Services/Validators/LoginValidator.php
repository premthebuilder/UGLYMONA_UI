<?php namespace Acme\Services\Validators;

class LoginValidator extends Validator {

  protected static $rules = [
    'email' => 'required|email',
    'password' => 'required'
  ];

}
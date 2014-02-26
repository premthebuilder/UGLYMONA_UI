<?php namespace Acme\Services\Validators;

class RegisterValidator extends Validator {

  protected static $rules = [
    'username' => 'required|min:6|unique:users,username',
    'email' => 'required|email|unique:users,email',
    'password' => 'required|min:6'
  ];

}
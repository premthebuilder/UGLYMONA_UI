<?php namespace Acme\Services\Validators;

use Illuminate\Validation\Factory;
use Acme\Exceptions\FormException;

abstract class Validator {

  protected $validator;

  public function __construct(Factory $validator)
  {
    $this->validator = $validator;
  }

  public function fire(array $data)
  {
    $validation = $this->validator->make($data, static::$rules);

    if ( $validation->fails()) throw new FormException($validation->messages());

    return true;
  }

}
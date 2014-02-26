<?php namespace Acme\Facades;

use Illuminate\Support\Facades\Facade;

class Mona extends Facade {

  public static function getFacadeAccessor()
  {
      return 'mona';
  }

}
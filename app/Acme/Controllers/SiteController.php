<?php namespace Acme\Controllers;

use View;

class SiteController extends BaseController {

  public function __construct()
  {
    $this->beforeFilter('user.login', ['only' => 'home']);
  }


  public function home()
  {
    // return View::make('site.home');
    return View::make('site.home');
  }


  public function about()
  {
    return View::make('site.about');
  }


  public function contact()
  {
    return View::make('site.contact');
  }

}
<?php namespace Acme\Controllers;

use Mona;
use Acme\Repositories\UserRepositoryInterface;
use View, Auth, Redirect, Session;

class AppController extends BaseController {

  public function __construct()
  {
    $this->beforeFilter('user.complete', ['except' => 'complete']);
  }

  public function complete()
  {
    $user = Auth::user();
    return View::make('app.complete')->withUser($user);
  }

  public function home()
  {
    $user = Mona::profile(Auth::user());
    return View::make('app.dash')->withUser($user);
  }

}
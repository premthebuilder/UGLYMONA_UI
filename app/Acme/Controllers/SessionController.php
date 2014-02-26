<?php namespace Acme\Controllers;

use Mona;
use Acme\Exceptions\FormException;
use View, Input, Redirect;

class SessionController extends BaseController {

  public function __construct()
  {
    $this->beforeFilter('user.login', ['only' => ['create', 'createNew']]);
  }

  public function create()
  {
    return View::make('site.create');
  }


  public function attempt()
  {
    $email = Input::get('email');
    $password = Input::get('password');
    $remember = Input::get('remember') == '1' ? true : false;

    $data = compact('email', 'password', 'remember');
    try{
      $user = Mona::login($data);
    }
    catch(FormException $e){
      return Redirect::back()->withErrors($e->getErrors())->withInput();
    }

    if(! $user) return Redirect::back()->withInput()->with('login_error', true);

    return Redirect::route('app.complete');
  }


  public function logout()
  {
    Mona::logout();
    return Redirect::route('session.create');
  }


  public function createNew()
  {
    return View::make('site.new');
  }

  public function attemptNew()
  {
    $data = Input::all();
    try{
      $user = Mona::register($data);
    }
    catch(FormException $e){
      return Redirect::back()->withErrors($e->getErrors())->withInput();
    }
    return Redirect::route('app.complete');
  }

}
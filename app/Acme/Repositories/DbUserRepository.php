<?php namespace Acme\Repositories;

use Acme\Models\User;
use Acme\Models\Profile;
use Hash, Auth;

class DbUserRepository implements UserRepositoryInterface {

  public function all()
  {
    return User::all();
  }


  public function find($id)
  {
    $user = User::find($id);
  }


  public function create($data)
  {
    $password = Hash::make($data['password']);

    $user =  new User;

    $user->username = $data['username'];
    $user->email = $data['email'];
    $user->password = $password;

    if(! $user->save()) return false;

    Auth::loginUsingId($user->id);

    return $this->login($user->email, $user->password);
  }


  public function login($email, $password, $remember = false)
  {
    try{
      $user = User::whereEmail($email)->first();
    }
    catch(QueryException $e){
      return false;
    }

    if($user && Hash::check($password, $user->password)){
      Auth::login($user, $remember);
      return $user;
    }

    return false;
  }

  public function logout()
  {
    Auth::logout();
  }

  public function isActive($user)
  {
    return User::whereId($user->id)->first()->active;
  }

}
<?php namespace Acme\Repositories;

interface UserRepositoryInterface {

  public function all();

  public function find($id);

  public function create($data);

  public function login($email, $password, $remember);

  public function logout();

  public function isActive($user);

}
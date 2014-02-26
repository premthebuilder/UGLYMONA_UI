<?php namespace Acme\Services;

use Acme\Repositories\UserRepositoryInterface;
use Event;

class MonaService {

  protected $user;

  public function __construct(UserRepositoryInterface $user)
  {
    $this->user = $user;
  }

  public function login(array $data)
  {
    Event::fire('user.login', [$data]);

    return $this->user->login($data['email'], $data['password'], $data['remember']);
  }

  public function register(array $data)
  {
    Event::fire('user.register', [$data]);

    return $this->user->create($data);
  }

  public function logout()
  {
    $this->user->logout();
  }

  public function complete($user)
  {
    return $this->user->isActive($user);
  }

}
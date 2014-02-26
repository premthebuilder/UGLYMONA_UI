<?php namespace Acme;

use Illuminate\Support\ServiceProvider;

class AcmeServiceProvider extends ServiceProvider
{
  protected $defer = false;

  public function boot()
  {
    # code...
  }

  public function register()
  {
    $this->app->singleton('Acme\Repositories\UserRepositoryInterface', 'Acme\Repositories\DbUserRepository');
    $this->app->bind('mona', 'Acme\Services\MonaService');
  }
}
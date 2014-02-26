<?php namespace Acme\Models;

use Eloquent;

class Profile extends Eloquent {

  protected $table = 'profiles';

	protected $guarded = array();

  protected $softDelete = true;

	public static $rules = array();

  public function user()
  {
    return $this->belongsTo('Acme\Model\User');
  }
}

<?php

class Category extends Eloquent{

  protected $fillable = array();


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categories';

  public function subscribes(){
		return $this->hasMany('Subscribe');
	}


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}

<?php

class Subscribe extends Eloquent{

  protected $fillable = array('email', 'category');

	public static $rules = array(
        'email' => 'email'
  );

	public function category(){
		return $this->belongsTo('Category');
	}

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'subscribes';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}

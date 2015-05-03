<?php

class Contact extends Eloquent{

    protected $fillable = array('author', 'contenu', 'email', 'service');

	public static $rules = [
		'service' => 'required',
        'email'	  => 'required|email',
        'author'  => 'required'
    ];


	// public function user(){
	// 	return $this->belongsTo->('Role');
	// }
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'messages';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}

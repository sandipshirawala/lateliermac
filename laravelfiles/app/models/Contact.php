<?php

class Contact extends Eloquent{

    protected $fillable = array('author', 'contenu', 'email', 'service');

	public static $rules = [
		'service' => 'required',
        'email'	  => 'required|email',
<<<<<<< HEAD
        'author'  => 'required'
=======
        'author'  => 'required',
        'contenu' => 'required'
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
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

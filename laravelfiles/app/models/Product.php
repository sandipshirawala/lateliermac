<?php

class Product extends Eloquent{

    protected $fillable = array('name', 'description', 'detail', 'prix', 'photo1', 'photo2', 'photo3', 'created_at', 'category_id', 'sort_order');

	public static $rules = array(
        'name' => 'required',
        'description'=>'required',
        'prix'=>'required'
    );

    public static function boot() {
        parent::boot();
        static::creating(function($product){
            $product->sort_order = Product::all()->count() + 1;
        });
    }

	public static function show($datetime,$heure=false){
        $tmstamp=strtotime($datetime);
        $jour = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
        $mois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
        $date=$jour[date("N",$tmstamp)-1]." ".date("d",$tmstamp)." ".$mois[date("n",$tmstamp)-1]." ".date("Y",$tmstamp);
        if($heure==true){
            $date.=" à".date("H:i:s",$tmstamp);
        }
        return ($date);
    }

    public static function resize($filename){
        // Le fichier
        $percent = 0.3;

        // Calcul des nouvelles dimensions
        list($width, $height) = getimagesize($filename);
        $new_width = $width * $percent;
        $new_height = $height * $percent;

        // Redimensionnement
        $image_p = imagecreatetruecolor($new_width, $new_height);
        $image = imagecreatefromjpeg($filename);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

        // Affichage
        imagejpeg($image_p, $filename, 100);

    }

	// public function user(){
	// 	return $this->belongsTo->('Role');
	// }
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}

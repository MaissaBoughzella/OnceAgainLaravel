<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable = ['Id_prod','Name','category_FK','user_FK','Description','Etat','Prix','Color','created_at','updated_at'];
    public $sortable = ['Prix', 'created_at'];
    public $Id_prod='idp';

 

    public function category()
    {
        return $this->belongsTo('App\Category','id')->select(['category_FK', 'Color']);
    }
    public function user()
    {
        return $this->belongsTo('App\User','id')->select(['user_FK']);
    }

}

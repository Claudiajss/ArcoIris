<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'description',
        'brand',
        'price',
        'stock',
        'slide',
        'image',
        'category_id',
        'user_id',
    ];

    public function getAllProducts(){
        return Product::all();
    }

    public function getProduct($id){
        return Product::find($id);
    }


    public function category (){
        return $this->belongsTo('App\Category');

    }

        public function user (){
            return $this->belongsTo('App\User');
        }

        public function favorite(){
            return $this->hasMany('App\Favorite');
    
        }



    


}

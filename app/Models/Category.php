<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'description',

    ];

    public function favorite(){
        return $this->hasMany('App\Favorite');

    }

        public function product(){
            return $this->hasMany('App\Product');
 }
}
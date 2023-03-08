<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'category_id',

    ];

    public function user(){
        return $this->belongsTo('App\User');

     }

        public function category(){
            return $this->belongsTo('App\Category');
        }
}

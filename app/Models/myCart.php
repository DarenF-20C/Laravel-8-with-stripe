<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myCart extends Model
{
    use HasFactory;
    protected $fillable=['productID','quantity','userID','orderID'];
    // related with User and Product based on ER-D

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
}

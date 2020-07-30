<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public function color()
    {
        return $this->belongsTo('App\models\Color');
    }
}

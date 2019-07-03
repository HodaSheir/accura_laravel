<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
//    protected $fillable = [
//         'name', 'quantity', 'price'
//    ];
    public function Items()
    {
        return $this->hasMany('App\Item');
    }
}


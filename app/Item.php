<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
         'name', 'quantity', 'price'
    ];
    
    public function Requests()
    {
        return $this->hasMany('App\Request');
    }
}

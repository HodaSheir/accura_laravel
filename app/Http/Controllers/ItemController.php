<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use Validator;

class ItemController extends Controller
{
    public function create() {
      
        return view('item.create');
    }
     
    public function store(){
        
    }
}

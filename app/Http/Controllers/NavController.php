<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    //
    public function about(){
      return views('pages.about');
    }

    
}

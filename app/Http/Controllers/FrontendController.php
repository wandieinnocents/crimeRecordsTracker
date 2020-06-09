<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function aboutPage(){
      
      return view('frontend.about');
    }

    public function servicePage(){
      return view('frontend.service');
    }

    public function screenshotPage(){
      return view('frontend.screenshot');
    }

    public function pricingPage(){
      return view('frontend.pricing');
    }

    public function teamPage(){
      return view('frontend.team');
    }

    public function contactPage(){
      return view('frontend.contact');
    }
}

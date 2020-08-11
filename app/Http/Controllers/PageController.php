<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function homefun($val=''){
  	return view('home');
  }

  public function aboutfun($val=''){
  	return view('about');
  }

  public function contactfun($val=''){
  	return view('contact');
  }
  public function postfun($val=''){
  	return view('post');
  }

}

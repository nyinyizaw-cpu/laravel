<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
     public function home($value='')
  {
  	return view('home');
  }
  public function about($vauel='')
  {
  	return view('about');
  }
  public function contact($value='')
  {
  	return view('contact');
  }
   public function service($value=''){
    $students=array(
     array('name'=>'mgmg','age'=>26),
     array('name'=>'mama','age'=>23)
    );
    dd($students);
   return view('service',['a'=>$students]);
  }
  
}

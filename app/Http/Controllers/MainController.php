<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function home($value='')
  {
  	return view('welcome');
  }
  public function a($vauel='')
  {
  	return view('Hello/Route');
  }
  public function testing($value='')
  {
  	return view('testing');
  }
}

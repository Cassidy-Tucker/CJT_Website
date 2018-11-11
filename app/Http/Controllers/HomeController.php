<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showWelcome(){
      $data['title']= "Hello";
      $data['heading']="You Made It";
      return view('welcome', $data);
    }
}

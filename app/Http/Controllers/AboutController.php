<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showAbout(){
      $data['title']= "cassidytucker";
      $data['heading']="About";
      return view('about', $data);
    }
}

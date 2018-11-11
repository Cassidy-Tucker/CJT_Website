<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact(){
      $data['title']= "cassidytucker";
      $data['heading']="Contact Me";
      return view('contact', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function showSocial(){
      $data['title']= "cassidytucker";
      $data['heading']="Social Media";
      return view('social', $data);
    }
}

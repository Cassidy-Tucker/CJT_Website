<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function showPortfolio(){
      $data['title']= "cassidytucker";
      $data['heading']="Portfolio";
      return view('portfolio', $data);
    }
}

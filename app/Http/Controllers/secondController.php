<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class secondController extends Controller
{
    public function index(){
      $subjects = ['maths','physics'];
     return view('jack')->with(['mysub'=>$subjects]);
    
    }
}

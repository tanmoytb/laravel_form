<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showController extends Controller
{
    public function index(Request $request) {
      // return $request;
      return view("show", 
      [
        'inputName' => $request->inputName, 
        'inputEmail' => $request->inputEmail, 
        'inputCheck' => $request->inputCheck,
      ]);
    }
}


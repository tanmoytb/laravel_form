<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showController extends Controller
{
    public function index(Request $request) {
      return view("show", ['inputText' => $request->input]);
    }
}


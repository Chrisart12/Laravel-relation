<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Middleware\test;

use App\Http\Requests;

class TestController extends Controller
{
  public function __construct()
  {
    $this->middleware('test');
  }
    public function index()
   {
        return view('about');
   }
}

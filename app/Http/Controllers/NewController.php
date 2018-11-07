<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
  public function index()
  {
    return view('master');
  }
  public function home()
  {
    return view('home');
  }
  public function detail()
  {
    return view('detail');
  }
}

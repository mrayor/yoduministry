<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index()
  {
      return view('home');
  }
  public function about()
  {
      return view('about');
  }
  public function blog()
  {
      return view('blog');
  }
  public function contact()
  {
      return view('contact');
  }


  //Remove to make dynamic
  public function singleblog()
  {
      return view('singleblog');
  }
}

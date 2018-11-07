<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AdminController extends Controller
{
    public function index()
    {
      return view('admin.master');
    }
    public function list()
    {
      $post = Post::all();

        return view('admin.listnews', compact('post'));
    }
    public function create()
    {
      return view  ('admin.post');
    }
}

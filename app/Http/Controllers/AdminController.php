<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AdminController extends Controller
{
    public function index()
    {
      return view('admin.home');
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
    public function store(Request $request)
    {
      $post = new Post;
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();
      return redirect()->route('admin.list');

    }
    public function edit($id)
    {
      $post = Post::find($id);
      return view('admin.edit',compact('post'));
    }

    public function update(Request $request,$id)
    {
      $post = Post::find($id);
      $post->title = $request->title;
       $post->body = $request->body;
       $post->save();

       return redirect()->route('admin.list');
    }

    public function delete($id)
    {
        Post::find($id)->delete();
        return redirect()->route('admin.list');
    }
}

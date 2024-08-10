<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function dashboard()
  {
    $posts = Post::all();
    return view("admin.dashboard", compact('posts'));
  }
  public function store(Request $request)
  {
    $request->validate([
      'tieuDe' => 'required|max:1000',
      'tomTat' => 'required',
      'noiDung' => 'required',
      'urlHinh' => 'anh1.jpg',
      'idLT' => '1',
    ]);
    Post::create($request->all());
    return redirect()->route('admin.dashboard')
      ->with('success', 'Post created successfully.');
  }
  public function create()
  {
    return view('admin.create');
  }
  public function update(Request $request, $id)
  {
    $request->validate([
      'tieuDe' => 'required|max:1000',
      'tomTat' => 'required',
      'noiDung' => 'required',
      'urlHinh' => 'anh1.jpg',
      'idLT' => '1',
    ]);
    $post = Post::find($id);
    $post->update($request->all());
    return redirect()->route('admin.dashboard')
      ->with('success', 'Post updated successfully.');
  }
  public function destroy($id)
  {
    $post = Post::find($id);
    $post->delete();
    return redirect()->route('admin.dashboard')
      ->with('success', 'Post deleted successfully');
  }
  public function show($id)
  {
    $post = Post::find($id);
    return view('admin.show', compact('post'));
  }
  public function edit($id)
  {
    $post = Post::find($id);
    return view('admin.edit', compact('post'));
  }
}

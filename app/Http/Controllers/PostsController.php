<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

  public function index(Request $request)
  {
    return view('welcome');
  }

  public function update(Request $request, $id)
  {
    return "Updated data with id = # " . $id;
  }

  public function get_path(Request $request)
  {
    if ($request->is('posts/path')) {
      return "TRUE";
    }

    return "False";
  }
}

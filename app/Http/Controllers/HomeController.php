<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Post;

class HomeController extends Controller
{
   //
   public function show()
   {
      $posts = Post::where('idposts', 1)->firstOrFail();
      echo $posts;
      return view('index');
   }
}

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
      return view('welcome');
   }
}

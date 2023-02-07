<?php

namespace App\Http\Controllers\Fronted;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
      $specials = Category::where('name', 'specials')->first();
      return view('welcome', compact('specials'));
    }
}

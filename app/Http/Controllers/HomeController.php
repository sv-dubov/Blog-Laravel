<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //echo 'hello';
        //$posts = Post::all();
        return view('pages.index');
    }
}

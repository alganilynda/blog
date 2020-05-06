<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class sitecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = post::all();
        return view('master',['MyPosts'=>$posts]);

    }

}

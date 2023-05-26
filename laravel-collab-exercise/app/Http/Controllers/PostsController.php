<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //create() is a user-defined function
    public function create()
    {
        return view('posts.create');
    }



    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required | image',

        ]);
        //create() is a built-in hasFactory method
        auth()->user()->posts()->create($data);

        dd(request()->all());
    }
}

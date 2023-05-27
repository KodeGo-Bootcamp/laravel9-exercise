<?php

namespace App\Http\Controllers;

// use Intervention 

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

        // Store the image request in a variable

        // Setup Intervention > Setup the namespace 

        // Setup an array for caption key value pair to access the array inside of the $data

        //create() is a built-in hasFactory method
        auth()->user()->posts()->create($data);

        // comment ouot this test die and dump method
        dd(request()->all());

        // Redirection to the /profile/ path for the authenticate user using user id


    }
}

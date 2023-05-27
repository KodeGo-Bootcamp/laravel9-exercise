<?php

namespace App\Http\Controllers;

// use Intervention
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // create() is a user-defined function
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

        // Store the image request in a variable -done
        $imagePath = request('image')->store('uploads', 'public');

        // Setup Intervention > Setup the namespace
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(500, 500, function ($constraint) {
            $constraint->aspectRatio();
        });

        $image->save();

        // Setup an array for caption key value pair to access the array inside of the $data

        // create() is a built-in hasFactory method -done
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        // comment out this test die and dump method -done

        // Redirection to the /profile/ path for the authenticate user using user id -done
        return redirect('/profile/'.auth()->user()->id);
    }

    public function show(\App\Models\Post $post){
        // dd($post);
        return view('posts.show', compact('post'));
    }
}

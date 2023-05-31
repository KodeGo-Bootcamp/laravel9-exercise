<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class ProfilesController extends Controller
{
    public function index(User $user)
    {
			// $user = User::findOrFail($user); 
			// return view('profiles.index', ['user' => $user]);
            return view('profiles.index', compact('user'));
    }

    public function edit(\App\Models\User $user)
    {
            return view('profiles.edit', compact('user'));
    }

    public function update()
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        dd($data);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        // $user = User::findOrFail($user);
        // return view('profiles.index', ['user' => $user]);
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if(request('image')){
            $imagePath = request('image')->store('profile', 'public');

            // Setup Intervention > Setup the namespace
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
    
            $image->save();
        }
        // dd($data);
        dd(array_merge(
            $data,
            ['image' => $imagePath]
        ));
        auth()->user()->profile->update(array_merge(
            $data,
            ['image' => $imagePath]
        ));

        return redirect("/profile/{$user->id}");
        // dd($data);
    }
}

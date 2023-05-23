<?php

namespace App\Http\Controllers;
namespace App\Models;

use App\Models\User;
use Illuminate\Http\Request;


class ProfilesController extends Controller
{
    public function index($user)
    {
			$user = User::findOrFail($user); 
			return view('profiles.index', ['user' => $user]);
    }
}

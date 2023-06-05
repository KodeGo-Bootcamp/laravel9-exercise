<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class EditController extends Controller
{
    public function edit(User $user){
        return $user->id;
   }
}

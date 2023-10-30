<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        $users = User::all();
        return view('users.profile',compact('users'));

    }
}

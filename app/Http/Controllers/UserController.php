<?php

namespace App\Http\Controllers;
use Illuminate\view\view;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(int $user_id): view
    {
        // dd(User::all());
        $user = User::find($user_id);
        return view('welcome', ['user' => $user]);
    }
}

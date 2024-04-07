<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    //
    public function __construct(){
        $this->middleware("guest")->except("logout");
    }
    public function index()
    {
        return view("auth.register");
    }

    public function store (Request $request)
    {
        $request->validate([
            "name"=>"required|min:4|max:20",
            "username"=>"required|min:4|max:25",
            "email"=>"required|email|max:120",
            "password"=>"required|confirmed|min:6"
        ]);
        User::create([
            "name"=> $request->name,
            "username"=> $request->username,
            "email"=> $request->email,
            "password"=> bcrypt($request->password)
        ]);
        if(auth()->attempt(["email"=> $request->email,"password"=> $request->password]))
        {
            return redirect()->route("memories.index", ['user'=>auth()->user()]);
        };
    }
}

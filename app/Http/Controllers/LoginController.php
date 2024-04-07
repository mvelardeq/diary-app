<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware("guest")->except("logout");
    }
    //
    public function index()
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            "email"=>"required",
            "password"=> "required"
        ]);
        if(!auth()->attempt($credentials))
        {
            return redirect()->back()->with("message","Credentials are not correct!");
        }

        return redirect()->route('memories.index');
    }
}

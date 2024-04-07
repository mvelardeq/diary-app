<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MemoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(User $user)
    {
        // dd(auth()->user());
        return view('memories.index',[
            'user'=> $user
        ]);
    }

    public function create()
    {
        return view('memories.create');
    }
}

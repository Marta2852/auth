<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function destroy(){
        Auth::logout();
        return redirect("/");
    }

    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);
        Auth::attempt($validated);
        return redirect("/");

    }
}

<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index(){
        $users=user::all();
        return view('user.index', compact('users'));
    }
    public function  create(){
        return view('user.create');
    }
    public function store(Request $request ){
user::create($request->all());
return redirect()->route('user.index');
    }
}

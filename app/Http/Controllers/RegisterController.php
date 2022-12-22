<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.register_home',[
        'title' => 'Register'


    ]);
    }

    public function store(Request $request){
        $data = $request->validate([
        'name' => 'required|max:225',
        'username' => 'required|min:3|max:255|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:5|max:255'

        ]);

        $data['password']= Hash::make($data['password']);
        User::create($data);
        $request->session()->flash('success','Registration success');
        return redirect ('/login');

    }


}

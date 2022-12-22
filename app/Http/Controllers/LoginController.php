<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.home_login',[
        'title' => 'Login'

    ]);
    }

    public function validation(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'login failed!');
    }

    public function loginGoogle(){
        return Socialite::driver('google')->redirect();
    }

    protected function registerlogin($data){
        $user = User::where('email','=', $data->email)->first();
            if(!$user){
                $user = new User();
                $user->name = $data->name;
                $user->email = $data->email;
                $user->provider_id = $data->provider_id;
                $user->save();
        }
        Auth::login($user);
    }

    public function handlecallback(){
        $user = Socialite::driver('google')->user();
        $this->registerlogin($user);

        return redirect('/');
        }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
        }


    }



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * handle login request
     * @param Request $request
     * @return \Illuminate\Routing\RedirectResponse
     */
    public function login(Request $request){
        $request->validate([
            'username' => 'required|min:3',
            'password' => 'required|min:6'
        ]);
        // flag
        $flag = false;

        // check if user exists
        $user = User::where('username', $request->username)->first();

        if(!$user){
            $flag = false;
        }else{
            // check if password is correct
            if(!Hash::check($request->password, $user->password)){
                $flag = false;
            }else{
                // login user
                $flag = true;
                
            }
        }

        if($flag){
            $user->update([
                'last_login' => now()
            ]);
            auth()->login($user);
            return redirect()->route('home');
        }else{
            return redirect()->back()->with('login-error', 'Username or password is incorrect');
        }

    }

    /**
     * Register a new user
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request){
        $request->validate([
            'new_username' => 'required|min:3',
            'new_email' => 'required|email',
            'new_password' => 'required|confirmed|min:6'
        ]);

        // insert user

        $user = new User([
            'username' => $request->input('new_username'),
            'email' => $request->input('new_email'),
            'password' => Hash::make($request->input('new_password'))
        ]);
        
        $user->save();

        auth()->login($user);
        return redirect()->route('home');

    }

    /**
     * handle logout
     * @return \Illuminate\Routing\RedirectResponse
     */
    public function logout()
    {
        auth()->logout();
        return redirect()->route('public.home');
    }
}

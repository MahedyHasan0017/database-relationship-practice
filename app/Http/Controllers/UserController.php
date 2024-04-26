<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users_list', compact('users'));
    }

    public function login(Request $request)
    {
        $user = Auth::guard('admin')->user();

        if($user){
            return redirect()->route('home') ; 
        }
        else{
            return view('login');
        }
        
    }


    public function login_store(Request $request)
    {

        $check = $request->all() ; 
        $data = [] ; 
        $data['email'] = $check['email'] ; 
        $data['password'] = $check['password'] ; 
        
        if(Auth::guard('admin')->attempt($data)){
            
            toastr()->success('Logged in');
            return redirect()->route('home') ; 
        }
        else{
            
            toastr()->success('invalid Credentials');
            return redirect()->back() ; 
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        toastr()->success('User Logged out');
        return redirect()->route('login_view') ;
    }

    

    public function register() {

        $user = Auth::guard('admin')->user();

        if($user){
            return redirect()->route('home') ; 
        }
        else{
            return view('register');
        }

       
    }


    public function register_store(Request $request)
    {
        $user = User::create([ 
            'name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if ($user) {

            $user->contact()->create([
                'address' => 'add-user',
                'number' => 'add-number',
                'city' => 'add-city',
            ]);

            toastr()->success('Registration Completed!');
            return redirect()->route('home');
        }
    }
}

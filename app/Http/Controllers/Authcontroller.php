<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function home(){
        return view('home');
    }
    public function login(){
        return view('login');
    }

    public function profile(){
        return view('profile');
    }

    public function userLogin(LoginRequest $res)
    {
        $user = $res->input('username');
        $res->session()->put('user',$user);
        $password = $res->input('password');

        $user = User::where('username', $user)
            ->orWhere('email', $user)
            ->orWhere('mobile_number', $user)
            ->first();

        if (!$user) {
            return back()->withErrors([
                'username' => 'Username, email, or mobile number not found. Please Signup First',
            ]);
        }

        if ($user && !Hash::check($password, $user->password)) {
            return back()->withErrors([
                'password' => 'Password is incorrect.',
            ]);
        }

        // If both user and password are correct, log in the user
        Auth::login($user);
        return redirect()->intended('/');
    }

    public function signup(){
        $url = url('/signup');
        $title = "Sign up to see photos and videos from your friends.";
        $data = compact('url','title');
        return view('signup')->with($data);
    }

    public function storeData(Request $request){
        $user = new user;

        $user->mobile_number = $request['mobilenumber'];
        $user->fullname = $request['fullname'];
        $user->username = $request['username'];
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/');
    }

    public function showData(){
        $users = user::all();
        $data = compact('users');
        return view('profile')->with($data);
    }
    public function trash(){
        $users = user::onlyTrashed()->get();
        $data = compact('users');
        return view('trash')->with($data);
    }

    public function deleteUser($id){
        $user =  User::find($id);
        if($user){
            $user->delete();
        }
        return redirect('profile');
    }
    public function restoreUser($id){
        $user =  User::withTrashed()->find($id);
        if($user){
            $user->restore();
        }
        return redirect('profile');
    }
    public function destroyUser($id){
        $user =  User::withTrashed()->find($id);
        if($user){
            $user->forceDelete();
        }
        return redirect('trash');
    }
    
    // public function editUser($id){
    //     $user = User::find($id);
    //     $url = url('/profile/update') . "/" . $id;
    //     $title = "Edit your data";
    //     if(!is_null($user)){
    //         $data = compact('user','url','title');
    //         return view('signup')->with($data);
            
    //     }else{
    //         return redirect('profile');
    //     }
    // }

    // public function updateUser($id, Request $request)
    // {
    //     $user = User::find($id);
    //     $user->mobile_number = $request['mobilenumber'];
    //     $user->fullname = $request['fullname'];
    //     $user->username = $request['username'];
    //     $user->password = $request['password'];
    //     $user->save();

    //     return redirect('profile');
    // }

    public function upload(Request $request){
        echo "<pre>";
        print_r($request);
    }
}

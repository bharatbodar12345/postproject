<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function register() 
    {
        return view('form');
    } 

    public function submit(Request $request)
    {
            $userdata = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash:: make($request->password),
                'mobile_no' => $request->mo,
                'username' => $request->username,
                'role' => $request->radio,
            ];
                User::create($userdata);

            return redirect()->to('/home')->with('success', " Data Successfully added");
    }

    public function showuserallpost(Request $request) 
    {
        $value= 1;
        $postdata = Post::where('access',$value)->get(); 
        return view("postcard")->with(compact('postdata'));      
    }

    public function userprofile(Request $request) 
    {
        // $value= 1;
        $uid = Auth::user()->id;
        $maindata = User::where('id', $uid)->get();
        return view("userprofile")->with(compact('maindata'));      
    }
    
}

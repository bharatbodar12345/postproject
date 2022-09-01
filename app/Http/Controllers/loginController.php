<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login() 
    {
        return view('login');
    }

    protected function loginSubmit(Request $request) 
    {
        // dd($request->all());
        $data = [
            'email' => $request->email,
            'password'=>$request->password
        ];
        // dd(Auth::attempt($data)); 
        if (Auth::attempt($data)) {

         if(Auth::user()->role == 1) {
            return redirect('/admin/postshow')->with('success','Login successfully');
         } else {
            return redirect('/postshow')->with('success','Login successfully');
         }
            
        }else {
            echo"Authentication not successful..";
            return redirect('/login ')->with('success','login not successfully');
        }
    }

    public function tableshow(Request $request) 
    
    {
        $uid = Auth::user()->id;
        $maindata = User::where('id', $uid)->get();
        $value= 1;
        $postdata = Post::where('access',$value)->get(); 
            
        return view("postshowtable")->with(compact('maindata','postdata'));      
       
    } 
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function admintableshow(Request $request) 
    
    {
        $maindata = User::get(); 
        $postdata = Post::with(['category', 'user', 'image'])->get();
        return view("postadmin")->with(compact('maindata','postdata'));
    }

    public function  destroy($id){

        $res=Post::find($id)->delete();
        if ($res){
          $data=[           

          'delete'=>'1',
          'msg'=>'success'
        ];
        }else{
          $data=[
          'delete'=>'0',
          'msg'=>'fail'
        ];
         }
         return  redirect('/admin/postshow');
    }

    public function posts() 
    {   
        $postdata = Post::with(['user','image'])->get(); 
        
        return view("adminpostcard")->with(compact(['postdata']));
    }

    public function accept($id) 
    {   
        $data =Post::find($id);
        $data->access = 1;
        $data->save();
        return redirect('/admin/postshow')->with('message', 'Status changed!');
    }

    public function  deletepost($id){

        $res=Post::find($id)->delete();
        if ($res){
          $data=[           

          'delete'=>'1',
          'msg'=>'success'
        ];
        }else{
          $data=[
          'delete'=>'0',
          'msg'=>'fail'
        ];
         }
         return  redirect('/admin/postshow');
    }

    public function adminprofile(Request $request) 
    {
        $maindata = User::get();
        return view("adminprofile")->with(compact('maindata'));      
    }

    public function Adminshowuserallpost(Request $request) 
    {
        $value= 1;
        $postdata = Post::where('access',$value)->get(); 
        return view("adminpostcard")->with(compact('postdata'));      
    }

}

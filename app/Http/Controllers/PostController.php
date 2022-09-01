<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Post_image;
use App\Models\User;
use App\Models\Post_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function add_postdata() 
    {
        $maindata = Post_category::all();         
        return view('postdata' ,['data'=> $maindata]);  
    }

    public function postdatasubmit(Request $request)
    {

            echo "Plz logout then register";

            $image_store =[ 

                $file = $request->file('file'),
                $filename= $file->getClientOriginalName(),
                $file->move(public_path('/uploads'),$filename),

                'image'=>$filename
            ];
            $user= Post_image::create($image_store);
           
            $category_detail=[
                'user_id' =>Auth::user()->id,
                'image_id' =>$user->id,
                'category_id'=>$request->category,
                'description'=>$request->description, 
            ];
            Post::create($category_detail);
                return redirect()->to('/postshow');
    }






}

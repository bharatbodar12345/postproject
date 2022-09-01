<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ItemSearchController extends Controller
{
    public function index(Request $request)  
{  
        $users = User::table('users')->paginate(10);

        return view('userpaginate', ['users' => $users]);
}  
}

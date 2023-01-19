<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function gantipassword(Request $request){
        // echo $request->username;
        // echo $request->password;
        $users = User::where('username',$request['username'])->first(); 
        $users->password= Hash::make($request['password']);
        $users->save();
        return redirect('/')->with('message','Password Updated');
    }
}

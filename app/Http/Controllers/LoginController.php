<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){

    	return view('login.index');
    }

    public function verify(Request $req){

        $user = DB::table('users')->where('name', $req->uid)
            ->where('password', $req->password)
            ->first();

    	if($user){
            $req->session()->put('uname', $user->name);
			$req->session()->put('uid', $user->id);
			$req->session()->put('type', $user->type);
			$req->session()->put('password', $user->password);
    		if($user->status == "a")
			{
				if($user->type == "admin")
					return redirect()->route('admin.index');
				else if($user->type == "moderator")
					return redirect()->route('moderator.index');
				else if($user->type == "user")
					return redirect()->route('user.index');
			}
			else if($user->status == "p")
			{
				$req->session()->flash('msg',"U r Account Is Pending, Please Contact Administration");
				return redirect()->route('login.index');
			}
			else if($user->status == "r")
			{
				$req->session()->flash('msg',"Your Account Is Rejected, Please Contact Administration");
				return redirect()->route('login.index');
			}
    	}else{

            $req->session()->flash('msg',"Invalid username/password");
    		return redirect()->route('login.index');
    	}
    }
}

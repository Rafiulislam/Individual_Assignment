<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubjectRequest;
use App\Http\Requests\AssignRequest;
use App\Http\Requests\TnoticeRequest;
use App\User;
use App\Subject;
use App\Studentnotice;
use App\Note;
use App\Result;
use Illuminate\Support\Facades\DB;

class ModeratorController extends Controller
{
    public function __construct()
	{
		$this->middleware('student');
	}

public function index(Request $req){

		
    $data = user::where('id', $req->session()->get('uid'))->get();
    
    //var_dump($data);
    return view('studenthome.index', ['data'=>$data]);
}

public function content(Request $req){

   // $data = Studentnotice::all();

   // return view('studenthome.noticeview',['data'=>$data]);
   return view('moderator.content');
}


public function admin_msg(Request $req){

    // $data = Studentnotice::all();
 
    // return view('studenthome.noticeview',['data'=>$data]);
    return view('moderator.admin-msg');
 }



 public function user_msg(Request $req){

    // $data = Studentnotice::all();
 
    // return view('studenthome.noticeview',['data'=>$data]);
    return view('moderator.user-msg');
 }


 public function changepassword(Request $req){

    $uid = $req->session()->get('uid');

    $user = user::find($uid);
        $user->password =$req->password;

        if($user->password == Null)
    
    return view('moderator.changepassword');
else{
    $user->save();
    return redirect()->route('moderator.changepassword');
}
    

}









}
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

class studenthomecontroller extends Controller
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


	public function noticeview(Request $req){

		$data = Studentnotice::all();

		return view('studenthome.noticeview',['data'=>$data]);
	}

	public function viewresult(Request $req){

    	$data = Result::where('studentid', $req->session()->get('uid'))->get();
    	
    	//var_dump($data);
		return view('studenthome.viewresult', ['data'=>$data]);

	}



	public function noteview(Request $req){

		$data = Note::all();

		return view('studenthome.noteview',['data'=>$data]);
	}

	public function changepassword(Request $req){

		$uid = $req->session()->get('uid');

    	$user = user::find($uid);
    		$user->password =$req->password;

    		if($user->password == Null)
    	
		return view('studenthome.changepassword');
	else{
		$user->save();
		return redirect()->route('studenthome.changepassword');
	}
		

	}

}
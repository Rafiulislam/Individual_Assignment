<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SnoticeRequest;
use App\Http\Requests\SnoteRequest;
use App\Http\Requests\ResultRequest;
use App\User;
use App\Subject;
use App\Studentnotice;
use App\Teachernotice;
use App\Note;
use App\Result;

class TeacherHomeController extends Controller
{

	public function __construct()
	{
		$this->middleware('teacher');
	}

    public function index(Request $req){

    	$data = Subject::where('teachername', $req->session()->get('uname'))->get();

		return view('teacherhome.index',['data'=>$data]);

}

	public function sendnotice(Request $req){
	
			return view('teacherhome.sendnotice');
	}
	
	public function insertnotice(SnoticeRequest $req){
		
		$notice = new Studentnotice;
		$notice->class = $req->cls;
		$notice->subject = $req->sub;
		$notice->reason = $req->reason;
		$notice->notice = $req->message;
		$notice->save();
		$req->session()->flash('sucmsg', "Notice Send Successfully!");
		return redirect()->route('teacherhome.sendnotice');
		
	}

	public function sendnote(Request $req){
	
			return view('teacherhome.sendnote');
	}
	
	public function insertnote(SnoteRequest $req){
		
		$note = new Note;
		$note->class = $req->cls;
		$note->subject = $req->sub;
		$note->file = $req->filename;
		$note->save();
		$req->session()->flash('sucmsg', "Note Send Successfully!");
		return redirect()->route('teacherhome.sendnote');
		
	}

	public function viewnotice(Request $req){

    	$data = Teachernotice::where('teacherid', $req->session()->get('uid'))->get();
    	
    	//var_dump($data);
		return view('teacherhome.viewnotice', ['data'=>$data]);

	}

	public function profile(Request $req){

    	$data = user::where('id', $req->session()->get('uid'))->get();
    	
    	//var_dump($data);
		return view('teacherhome.profile', ['data'=>$data]);

	}



	public function changepassword(Request $req){

		$uid = $req->session()->get('uid');

    	$user = user::find($uid);
    		$user->password =$req->password;

    		if($user->password == Null)
    	
		return view('teacherhome.changepassword');
	else{
		$user->save();
		return redirect()->route('teacherhome.profile');
	}
		

	}

	public function result(Request $req){
	
			return view('teacherhome.result');
	}

	public function insertresult(ResultRequest $req){
	
		$result = new Result;
		$result->class = $req->cls;
		$result->subject = $req->subject;
		$result->studentid = $req->studentid;
		$result->firstterm = $req->firstterm;
		$result->secondterm = $req->secondterm;
		$result->finalterm = $req->finalterm;
		$result->save();
		$req->session()->flash('sucmsg', "Result Send Successfully!");
		return redirect()->route('teacherhome.result');
	}


}

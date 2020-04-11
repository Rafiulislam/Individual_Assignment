<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\SubjectRequest;
//use App\Http\Requests\AssignRequest;
//use App\Http\Requests\TnoticeRequest;
use App\User;
use App\Subject;
use App\Teachernotice;
use App\Result;

class adminController extends Controller
{
    public function __construct()
	{
		$this->middleware('admin');
	}
	public function index(Request $req){
		
		$astd = User::where('type', 'user')
					->where('status', 'a')
					->count();
		$pstd = User::where('type', 'user')
					->where('status', 'p')
					->count();
		$rstd = User::where('type', 'user')
					->where('status', 'r')
					->count();
		$atch = User::where('type', 'moderator')
					->where('status', 'a')
					->count();
		$ptch = User::where('type', 'moderator')
					->where('status', 'p')
					->count();
		$rtch = User::where('type', 'moderator')
					->where('status', 'r')
					->count();
		return view('admin.index')
						->with('astd', $astd)
						->with('pstd', $pstd)
						->with('rstd', $rstd)
						->with('atch', $atch)
						->with('ptch', $ptch)
						->with('rtch', $rtch);
    }
    
    public function userinfo(Request $req){
		
		$std = User::where('type', 'user')->get();
		return view('admin.userinfo')->with('user', $std);
    }
    
    public function moderatorinfo(Request $req){
		
		$moderators = User::where('type', 'moderator')->get();
		return view('admin.moderatorinfo')->with('moderator', $moderators);
	}

}

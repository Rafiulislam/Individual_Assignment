<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubjectRequest;
use App\Http\Requests\AssignRequest;
use App\Http\Requests\TnoticeRequest;
use App\User;
use App\Subject;
use App\Teachernotice;
use App\Result;

class AdminHomeController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('admin');
	}
	
	
	public function index(Request $req){
		
		$astd = User::where('type', 'student')
					->where('status', 'a')
					->count();
		$pstd = User::where('type', 'student')
					->where('status', 'p')
					->count();
		$rstd = User::where('type', 'student')
					->where('status', 'r')
					->count();
		$atch = User::where('type', 'teacher')
					->where('status', 'a')
					->count();
		$ptch = User::where('type', 'teacher')
					->where('status', 'p')
					->count();
		$rtch = User::where('type', 'teacher')
					->where('status', 'r')
					->count();
		return view('adminhome.index')
						->with('astd', $astd)
						->with('pstd', $pstd)
						->with('rstd', $rstd)
						->with('atch', $atch)
						->with('ptch', $ptch)
						->with('rtch', $rtch);
	}

	public function studentsInfo(Request $req){
		
		$std = User::where('type', 'student')->get();
		return view('adminhome.studentinfo')->with('students', $std);
	}
	
	public function updatestdstatus(Request $req){
		
		$student 			= User::find($req->id);
    	$student->status 	= $req->status;
    	$student->save();
    	return redirect()->route('adminhome.studentsinfo');
	}
	
	public function teachersInfo(Request $req){
		
		$teacher = User::where('type', 'teacher')->get();
		return view('adminhome.teacherinfo')->with('teachers', $teacher);
	}
	
	public function updateteacherstatus(Request $req){
		
		$teacher 			= User::find($req->id);
    	$teacher->status 	= $req->status;
    	$teacher->save();
    	return redirect()->route('adminhome.teachersinfo');
	}
	
	public function search(Request $req){
		return view('adminhome.search');
	}
	
	public function postsearch(Request $req){
		
		$user = User::where('name','LIKE',"%{$req->txt}%")
                           ->get();
		return view('extra.searchresult')->with('users', $user);
	}
	
	public function subject(Request $req){
		return view('adminhome.subject');
	}
	
	public function insertsubject(SubjectRequest $req){
		
		$sbjtname = strtoupper(trim($req->subjectname));
		
		$chk = Subject::where('class', $req->cls)
               ->where('subjectname', $sbjtname)
               ->get();
		
		//error_log($chk);
		
		if($chk->isEmpty())
		{
			$subject = new Subject;
			$subject->subjectname = $sbjtname;
			$subject->class = $req->cls;
			$subject->teachername = "";
			$subject->save();
			$req->session()->flash('sucmsg', "Subject Added Successfully!");
			return redirect()->route('adminhome.subject');
		}
		else
		{
			$req->session()->flash('sucmsg', "Subject Already Exists For this class!");
			return redirect()->route('adminhome.subject');
		}
	}
	
	public function assignteacher(Request $req){
		return view('adminhome.assignteacher');
	}
	
	public function insertteachertosubject(AssignRequest $req){
		
		$subject 				= Subject::find($req->sbjid);
    	$subject->teachername 	= $req->teachername;
    	$subject->save();
		
		$req->session()->flash('sucmsg', "Teacher assigned Successfull!");
    	return redirect()->route('adminhome.assignteacher');
	}
	
	public function allsubjects(Request $req){
		
		$subject = Subject::where('class', $req->class)->get();
		//error_log($subject);
		return view('extra.allsubjects')->with('subjects', $subject);
	}
	
	public function allteachers(Request $req){
		
		$chk = Subject::where('class', $req->class)
               ->where('id', $req->subject)
               ->get();
		$tname = $chk[0]->teachername;
		$teacher = User::where('type', 'teacher')->get();
		return view('extra.allteachers')
					->with('teachers', $teacher)
					->with('teachername', $tname);
	}
	
	public function sendnotice(Request $req){
	
		$teacher = User::where('type', 'teacher')->get();
			return view('adminhome.sendnotice')->with('teachers', $teacher);
	}
	
	public function inserttnotice(TnoticeRequest $req){
		
		$tnotice = new Teachernotice;
		$tnotice->teacherid = $req->teacherid;
		$tnotice->subject = $req->sub;
		$tnotice->notice = $req->message;;
		$tnotice->save();
		$req->session()->flash('sucmsg', "Notice Send Successfully!");
		return redirect()->route('adminhome.sendnotice');
		
	}
	
	public function studentreport(Request $req){
		
		return view('adminhome.studentreport');
	}
	
	public function poststudentreport(Request $req){
		
		if($req->generate == "1")
		{
			$collection = Result::groupBy('class','studentid')
							->selectRaw('class, studentid, SUM(firstterm) as Summation')
							->get();
			$term = "Highest Mark In FirstTerm";
		}
		else if($req->generate == "2")
		{
			$collection = Result::groupBy('class','studentid')
							->selectRaw('class, studentid, SUM(secondterm) as Summation')
							->get();
			$term = "Highest Mark In SecondTerm";
		}
		else if($req->generate == "3")
		{
			$collection = Result::groupBy('class','studentid')
							->selectRaw('class, studentid, SUM(finalterm) as Summation')
							->get();
			$term = "Highest Mark In FinalTerm";
		}
		
		$maxnum = $collection->where('class', $req->cls)->max('Summation');
		$result = $collection->where('class', $req->cls)->where('Summation', $maxnum);
		
		$std = [];
		foreach ($result as $rs) {
			array_push($std, $rs->studentid);
        }
		
		$student = User::findMany($std);
		error_log($student);
		
		return view('adminhome.studentreport')
						->with('students', $student)
						->with('term', $term)
						->with('mark', $maxnum);
	}
}








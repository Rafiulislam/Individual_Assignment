<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Registrationcontroller extends Controller
{

    public function registration(Request $req){
    	//return view('registration.reg');

    	$name = $req->input('name');
    	$fathername = $req->input('fathername');
    	$mothername = $req->input('mothername');
    	$password = $req->input('password');
    	$cpassword = $req->input('cpassword');
    	$email = $req->input('email');
    	$address = $req->input('address');
    	$image = $req->input('image');
    	$type = $req->input('type');
    	$dob = $req->input('dob');
    
    	$gender = $req->input('gender');
    	//$validity = 'a';
    	if($password !="" && $cpassword!="" && $password == $cpassword && $name !="" && $fathername !="" && $mothername !="" && 
    	   $email !="" && $address !="" && $image !="" && $type !="" && $dob !="" && 
           $gender !="")

            {
    		      
                  $data = array('name'=>$name,'fathername'=>$fathername,'image'=>$image,'mothername'=>
                  $mothername, 'password'=>$password,'email'=>$email,'address'=>$address,'type'=>
                  $type,'dob'=>$dob,'gender'=>$gender,'status'=>'p');

    	           DB::table('users')->insert($data);
						//->flash('sucmsg', "Your Registation completed")
						
						
    	           return redirect()->route('login.index')->with('sucmsg', "Your Registation completed.Use Your Username or id with password to LOgin ")->with('status','Your Account will be in Pending Queue.Wait Untill Admin confirm');
    }else{
    	return ("Field can't be empty");
    	
    }
}


    

    public function display(){

    	return view('registration.index');
    }
}

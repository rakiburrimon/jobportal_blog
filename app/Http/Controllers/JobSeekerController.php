<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class JobSeekerController extends Controller {

public function insertform(){
return view('jobseeker_create');
}
public function insert_jobseeker(Request $request){
$name = $request->input('name');
$email = $request->input('email');
$password = $request->input('password');
$status = $request->input('status');
$type = $request->input('type');
$data=array('name'=>$name,"email"=>$email,"password"=>$password,"status"=>$status,"type"=>$type);
DB::table('jobseekers')->insert($data);
echo "Registered successfully.<br/>";
echo '<a href = "/insert_jobseeker">Click Here</a> to go back.';
}
}
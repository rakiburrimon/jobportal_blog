<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\AuthenticatesUsers;


class JobSeekerController extends Controller {

    public function insertform()
        {
            return view('create_jobseeker');
        }
    public function create_jobseeker(Request $request)
        {
            $name = $request->input('name');
            $email = $request->input('email');
            $password = $request->input('password');
            $status = $request->input('status');
            $type = $request->input('type');
            $data=array('name'=>$name,"email"=>$email,"password"=>bcrypt($password),"status"=>$status,"type"=>$type);
            DB::table('jobseekers')->insert($data);
            echo "Registered successfully.<br/>";
            return redirect()->route('/welcome');
        }

        protected $redirectTo = '/home';

        public function __construct()
        {
            $this->middleware('guest', ['except' => 'logout']);
        }

        public function showjobseekerlogin()
        {
            return view('JobSeekerLogin');
        }

        protected function JobSeeker_Login(Request $request)
        {
            $field = filter_var($request->get($this->email()), FILTER_VALIDATE_EMAIL)
                ? $this->email()
                : 'email';

            return [
                $field => $request->get($this->username()),
                'password' => $request->password,
            ];
        }

}
<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Student;

class RegController extends Controller
{
    public function signUpShow(){
        return view('student.signup');
    }

    public function signUpSubmit(Request $request){
        $validate = $request->validate([
            "username"=>"required|min:4|max:20|unique:users,username",
            'name'=>'required',
            'password'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'dob'=>'required',
            'address'=>'required',
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ]
    );

        $user = new User();
        $user->username = $request->username;
        $user->password = $request->password;
        $user->role_id = 1;
        $user->save();

        $user = User::where('username', $request->username)->first();


        $student = new  Student();
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->age = $request->age;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->user_id = $user->user_id;
        $student->save();

        return redirect()->route('login');

    }

    public function signUpShowCreator(){
        return view('creator.signup_creator');
    }

    public function signUpSubmitCreator(Request $request){
        $validate = $request->validate([
            "username"=>"required|min:4|max:20|unique:users,username",
            'name'=>'required',
            'password'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'dob'=>'required',
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ]
    );

        $user = new User();
        $user->username = $request->username;
        $user->password = $request->password;
        $user->role_id = 2;
        $user->save();

        $user = User::where('username', $request->username)->first();


        $creator = new  Creator();
        $creator->name = $request->name;
        $creator->gender = $request->gender;
        $creator->age = $request->age;
        $creator->dob = $request->dob;
        $creator->email = $request->email;
        $creator->phone = $request->phone;
        $creator->user_id = $user->user_id;
        $creator->save();

        return redirect()->route('login');

    }
}

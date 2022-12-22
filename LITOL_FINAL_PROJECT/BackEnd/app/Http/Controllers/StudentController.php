<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use stdClass;

class StudentController extends Controller
{

    public function updateStudent(Request $request){

        User::where('user_id', $request->id)
            ->update([
                'username' => $request->username
            ]);

        Student::where('user_id', $request->id)
            ->update([
                'age' => $request->age,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone
            ]);

        return $request;
    }

    public function newStudentData(Request $request){

        $user = User::where('user_id', $request->input("user_id"))->first();
        $student = Student::where('user_id', $request->input("user_id"))->first();
        $object = new stdClass();
                $object->user = $student;
                $object->role = "STUDENT";
                $object->name = $user->username;
                return $object;


    }



}

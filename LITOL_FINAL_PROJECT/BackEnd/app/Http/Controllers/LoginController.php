<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use App\Models\Summary;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Student;
use stdClass;
use Symfony\Component\HttpFoundation\Cookie;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('username', $request->username)
            ->where(
                'password', $request->password
            )
            ->first(
            );


        if ($user) {
            if ($user->role->role_name == "STUDENT") {
                $student = Student::where('user_id', $user->user_id)->first();
                $object = new stdClass();
                $object->user = $student;
                $object->role = "STUDENT";
                $object->name = $user->username;
                return $object;
            }


            $creator = Creator::where('user_id', $user->user_id)->first();
            $object = new stdClass();
            $object->user = $creator;
            $object->role = "CREATOR";
            $object->name = $user->username;
            return $object;



        }
        return null;

    }
}

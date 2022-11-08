<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Student;

class LoginController extends Controller
{
    public function loginShow()
    {
        return view('login');
    }
    public function loginSubmit(Request $request)
    {

        $validate = $request->validate(
            [
                "username" => "required",
                'password' => 'required'
            ]
        );

        $user = User::where('username', $request->username)
            ->where(
                'password', $request->password
            )
            ->first(
            );


        if ($user) {
            if ($user->role->role_name == "STUDENT") {
                $student = Student::where('user_id', $user->user_id)->first();
                $request->session()->put('profile', $student);
                return redirect()->route('studentDash');


            }
            $creator = Creator::where('user_id', $user->user_id)->first();
            $request->session()->put('profile', $creator);
            return redirect()->route('creatorDash');

        }
        return back();

    }
    public function logout()
    {
        session()->forget('profile');
        return redirect()->route('login');
    }
}

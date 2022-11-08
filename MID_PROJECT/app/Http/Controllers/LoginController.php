<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use App\Models\Summary;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Student;
use Symfony\Component\HttpFoundation\Cookie;

class LoginController extends Controller
{
    public function loginShow(Request $request)
    {
        // if($request->cookie('remember') != null){
        //     if ($request->session()->get('roleCheck') == "STUDENT")
        //         return redirect()->route('studentDash');
        //     else
        //     return redirect()->route('creatorDash');
        // }
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
                $request->session()->put('roleCheck', $user->role->role_name);
                // if($request->remember == true)
                //     $request->withCookie(cookie('remember', "on"));
                return redirect()->route('studentDash');
            }


            $creator = Creator::where('user_id', $user->user_id)->first();
            $request->session()->put('profile', $creator);
            $request->session()->put('roleCheck', $user->role->role_name);
            // if($request->remember == true)
            //         $request->withCookie(cookie('remember', "on"));
            return redirect()->route('creatorDash');
            // return $request->session()->get('roleCheck');



        }
        return back();

    }
    public function logout()
    {
        session()->forget('profile');
        return redirect()->route('login');
    }
}

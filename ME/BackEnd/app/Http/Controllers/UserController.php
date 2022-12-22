<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Models\User;


class UserController extends Controller
{
    public function create(Request $request)
    {

        $creator = new User();
            $creator->name = $request->name;
            $creator->email = $request->email;
            $creator->password = $request->password;
            $creator->age = $request->age;
            $creator->address = $request->address;
        $creator->save();

        $this->verifyEmail($request->email);

        return response()->json([
            "response" => $request,
        ]);
    }

    public function verifyEmail($email)
    {
        $user = User::where("email", $email)->first();
        $data = array("name" => "Laravel", "url" => "http://localhost:8000/api/users/verify-email/$email");
        if ($user) {
            Mail::send('email', $data, function ($message) use ($email) {
                $message->to($email, "User");
                $message->subject('Subject');
            });
        }

    }

    public function verifyEmailLink($email)
    {
        return response()->json([
            "message" => "Email Verified",
        ], 200);
    }

    public function result(Request $request)
    {
        $user = User::where("email", $request->input("email"))->first();
        return response()->json([
            "data" => $user,
        ], 200);
    }
}

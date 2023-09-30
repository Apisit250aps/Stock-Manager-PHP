<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function create(Request $request)
    {
        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');
        $status = true;
        $user = User::create([
            'email' => $email,
            'username' => $username,
            'password' => $password
        ]);

        if ($user) {
            $status = false;
        }

        return response()->json([
            'status' => $status

        ]);
    }

    public function check(Request $request)
    {
        $status = true;
        $message = "";
        // form data
        $check = $request->input('check');
        $key = $request->input('key');

        switch ($check) {
            case 'email':
                $count = User::where('email', $key)->count();
                break;
            case 'username':
                $count = User::where('username', $key)->count();
                break;
            default:
                $message = "Unknown checker type!";
                $count = 0;
                $status = false;
                return response()->json(
                    [
                        'status' => $status,
                        'message' => $message,
                    ]
                );
        }

        if ($count == 0) {
            $status = true;
            $message = $check . " isn't Exist!";
        } else {
            $status = false;
            $message = $check . " is Exist!";
        }

        return response()->json(
            [
                'status' => $status,
                'message' => $message,
            ]
        );
    }
}

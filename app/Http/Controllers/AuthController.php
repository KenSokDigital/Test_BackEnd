<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth;
use Illuminate\Support\Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function showFrmRgs()
    {
        return view('Authentication.register');
    }
    public function CreateUsr(Request $req)
    {
        $req->validate([
            'user_Name'=> 'required|string|max:100|unique:auth',
            'user_Email'=> 'required|email|unique:auth',
            'user_Password'=> 'required|same:password|min:8',
            'confirm_password' => 'required|same:password',
        ]);
        $users=Auth::create([
            'user_Name'     => $req->username,
            'user_Email'    => $req->email,
            'user_Password' => bcrypt($req->password),
        ]);
        return redirect()
            ->route('login.submit')
            ->with('success', 'Register Success');
    }

    public function showfrmLogin()
    {
        return view('Authentication.login');
    }

    public function CheckingLogin(Request $req)
    {
        $email = $req->user_Email;
        //$password = $req->user_Password;
        $user = Auth::table('users')->where('user_Email', $email)->first();
        if (!$user) {
            return redirect('/frmLogin')
                ->with('error', 'Email or Password incorrect');
        }
        // Login Success
        return redirect('/home')
            ->with('success', 'Login Success');
    }
}

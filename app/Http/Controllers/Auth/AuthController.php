<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class   AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function loginUser(Request $request)
    {
      
        try {
            if(Auth::attempt(["email" => $request->email, "password" => $request->password])){
                return redirect()->route('admin.index')->with('success', 'Sucessfully Login:');
            } else {
                return redirect()->route('login')->with('error', 'Invalid Credencials:');

            }

        } catch (Exception $ex) {
            return back()->with('error', 'Error while logging in: ' );

        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
    
}

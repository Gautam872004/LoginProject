<?php

namespace App\Http\Controllers;

use App\Models\Luser;
use Illuminate\Http\Request;
use Session;

class LoginProject extends Controller
{
    //

    function logincheck(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $obj = Luser::where("email",$email)->where("password",$password)->get();

        if(count($obj)==1)
        {
            Session::put("islogin","yes");
            return redirect()->route("dashbord");
        }
        else
        {
            return redirect()->route("authlogin")->with("message","E-Mail and Password are not matched please try again");
        }
    }

    function Loginauth()
    {
        return view('LoginProject.AuthPage');
    }

    function dashbord()
    {
        return view('LoginProject.Dashbord');
    }

    function Registration(Request $request)
    {
        return view('LoginProject.RegistrationUser');
    }

    function LogOut()
    {
        Session::flush();
        return redirect()->route("authlogin")->with("message","you are successfully Log-Out.......");
    }
    
}

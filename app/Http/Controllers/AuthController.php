<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\Users;


class AuthController extends Controller
{
    function login(){
        return view ('auth.login');
    }
    function register(){
        return view ('auth.register');
    }
    function save(Request $request){
        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:30'
        ]);

        //Insert data into database
        $users = new Users;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $save = $users->save();

        if($save){
           return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }

    function check(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:5|max:30'
        ]);

        $userInfo = Users::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', ['userID'=>$userInfo->id, 'name'=>$userInfo->name]);
                Session::put('id',$userInfo->id);
                Session::put('name',$userInfo->name);
                Session::put('email',$userInfo->email);
                Session::put('photo',$userInfo->photo);
                return redirect('/admin/dashboard');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }
    
    function dashboard(){
        return view('admin.dashboard');
    }

}

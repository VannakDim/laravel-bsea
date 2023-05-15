<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin.users.edit',compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Users::find($id);
        return view('admin.users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $user = Users::findOrFail($id);
        if($request->hasFile("photo")){
            $name=$request->file("photo")->getClientOriginalName();
            $file=$request->file("photo")->storeAs('img',$name);
            Session::put('photo',$name);
            $user->update([
                "photo"=>$name,
            ]);
            return redirect()->back()->with('profile_message', 'Record Updated!');
        }
        else{
            $request->validate([
                'username'=>'required',
                'password'=>'required|min:5|max:30',
                'new_password'=>'required|min:5|max:30',
                'confirm_password'=>'required|same:new_password|min:6',
            ]);

            if(Hash::check($request->password, $user->password)){
                
                $user->name = $request->username;
                $user->password = Hash::make($request->new_password);
                $user->save();
            
            }else{
                return redirect()->back()->with('account_message', 'Password is incorrect!');
            }
            return redirect()->back()->with('account_message', 'Record Updated!');
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

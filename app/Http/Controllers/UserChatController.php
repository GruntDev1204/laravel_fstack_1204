<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserChat;
use App\Http\Requests\LoginChat;
use App\Models\User;
use App\Models\UserChat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexLogin()
    {
        return view('chatRealTimefake.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSignup()
    {
         return view('chatRealTimefake.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createUser(CreateUserChat $request)
    {
        $data = $request->all();
        $data['password']   = bcrypt($request->password);
        UserChat::create($data);
        return response()->json([
            'status'    => true,
        ]);
    }

    public function loginUser(LoginChat $request)
    {
        $data  = $request->only('sdt', 'password');
        $check = Auth::guard('UserChat')->attempt($data);
        if($check) {
            return response()->json(['status' => true]);
        } else {
            //Login thất bại
            return response()->json(['status' => false]);
        }
    }
    public function dangXuat()
    {
        Auth::guard('UserChat')->logout();
        return redirect('/user/index/login');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserChat  $userChat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserChat $userChat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserChat  $userChat
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserChat $userChat)
    {
        //
    }
}

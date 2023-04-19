<?php

namespace App\Http\Controllers;

use App\Models\ChatApp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Predis\Response\Status;

class ChatAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loadData()
    {
        $data = ChatApp::all();
        return response()->json([
            'ChatData' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $check = Auth::guard('UserChat')->check();
        if($check){
            $id_user = Auth::guard('UserChat')->id();
            return view('chatRealTimefake.Chat', compact('id_user'));
        }else{
            $id_user = 0;
            return  view('chatRealTimefake.Chat', compact('id_user'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendChat(Request $request)
{
        $data = $request->all();
        $data['id_user'] = Auth::guard('UserChat')->id();
        $data['content'] =  $request->content;
        ChatApp::create($data);
        return response()->json([[
            'Content' => $data['content'],
            'id_user' => $data['id_user'],
        ]]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChatApp  $chatApp
     * @return \Illuminate\Http\Response
     */
    public function clearChat()
    {
        DB::table('chat_apps')->delete();
         return response()->json([
            'status' => true,
        ]);

    }


}

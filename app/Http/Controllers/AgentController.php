<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Requests\AgentRegisterRequest;
use Illuminate\Support\Str;
use App\Mail\MailKichHoatDaiLy;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\AgentLoginRequest;
use App\Http\Requests\UpdateAgent;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    public function register()
    {
        return view('agent.register');
    }

    public function manager()
    {
        return view('agent.manager');
    }
    public function showdataAgent(){
        $data = Agent::all();

        return response()->json([
            'listData'          => $data,
        ]);
    }
    public function registerAction(AgentRegisterRequest $request)
    {
        $parts = explode(" ", $request->ho_va_ten);
        if(count($parts) > 1) {
            $lastname = array_pop($parts);
            $firstname = implode(" ", $parts);
        }
        else
        {
            $firstname = $request->ho_va_ten;
            $lastname = " ";
        }


        $data = $request->all();
        $data['hash']       = Str::uuid();
        $data['ho_lot']     = $firstname;
        $data['ten']        = $lastname;
        $data['thanh_pho']  = "Đà Nẵng";
        $data['password']   = bcrypt($request->password);
        Agent::create($data);

        // Gửi mail
        Mail::to($request->email)->send(new MailKichHoatDaiLy(
            $request->ho_va_ten,
            $data['hash'],
            'Kích Hoạt Loại Tài Khoản : Agent'
        ));

        return response()->json(['status' => true]);
    }

    public function login()
    {
        return view('agent.login');
    }

    public function loginAction(AgentLoginRequest $request)
    {
        $data  = $request->all();
        $check = Auth::guard('agent')->attempt($data);
        if($check) {
            // Đã login thành công!!!
            $agent = Auth::guard('agent')->user();
            if($agent->is_email) {
                return response()->json(['status' => 2]);
            } else {
                //Chưa kích hoạt mail
                Auth::guard('agent')->logout();
                return response()->json(['status' => 1]);
            }
        } else {
            //Login thất bại
            return response()->json(['status' => 0]);
        }
    }

    // public function login_addtocart(AgentLoginRequest $request)
    // {
    //     $data  = $request->all();
    //     $check = Auth::guard('agent')->attempt($data);
    //     if($check) {
    //         // Đã login thành công!!!
    //         $agent = Auth::guard('agent')->user();
    //         if($agent->is_email) {
    //             toastr()->success("Bạn đã đăng nhập thành công !!!");
    //             return redirect()->back();
    //         } else {
    //             //Chưa kích hoạt mail
    //             Auth::guard('agent')->logout();
    //             toastr()->success("Bạn đã đăng nhập thành công !!!");
    //         }
    //     } else {
    //         //Login thất bại
    //         return response()->json(['status' => 0]);
    //     }
    // }

    public function active($hash)
    {
        $agent = Agent::where('hash', $hash)->first();
        if($agent->is_email) {
            toastr()->warning('Tài khoản của bạn đã được kích hoạt trước đó!');
        } else {
            $agent->is_email = 1;
            $agent->save();
            toastr()->success('Tài khoản của bạn đã được kích hoạt!');
        }
        return redirect('/agent/login');
    }

    public function logout()
    {
        Auth::guard("agent")->logout();
        return redirect("/client");
    }

    public function dataA(){
        $agent = Auth::guard('agent')->user();
        if($agent){
            $Agent = Agent::all();
            return response()->json([
                'dataAgent'   => $Agent
            ]);
        }
    }

    public function editView(){
        return view('agent.edit');
    }


    // public function UpdateInfo(UpdateAgent $request){
    //     $agent = Auth::guard('agent')->user();
    //     if($agent){
    //         $agent =  Agent::find($request->id);
    //         $data = $request->all();
    //         $agent->update($data);
    //         // $parts = explode(" ", $request->ho_va_ten);
    //         // if(count($parts) > 1) {
    //         //     $lastname = array_pop($parts);
    //         //     $firstname = implode(" ", $parts);
    //         // }
    //         // else
    //         // {
    //         //     $firstname = $request->ho_va_ten;
    //         //     $lastname = " ";
    //         // }

    //         // $data['hash']       = Str::uuid();
    //         // $data['ho_lot']     = $firstname;
    //         // $data['ten']        = $lastname;
    //         // $data['password']   = bcrypt($request->password);
    //         return response()->json([
    //             'status' => true,

    //         ]);
    //     }else{
    //         return response()->json([
    //             'status' => false,
    //         ]);
    //     }
    // }

    // public function editInfo($id){
    //     $agent = Auth::guard('agent')->user();
    //     if($agent) {
    //         $agent = Agent::find($id);
    //         return response()->json([
    //             'status'  =>  true,
    //             'Agent'    =>  $agent,
    //         ]);
    //     } else {
    //         return response()->json([
    //             'status'  =>  false,
    //         ]);
    //     }
    // }

    public function lockAgent($id){
        $agent = Agent::find($id);
        $agent->is_block = !$agent->is_block;
        $agent->save();
        return response()->json(['status' => true]);
    }

    public function khaitruAgent($id){
        $agent = Agent::find($id);
        if($agent){
            $agent->delete();
            return response()->json([
               'agent' => true,
            ]);
        }else{
            return response()->json([
                'agent' => false,
             ]);
        }
    }
}

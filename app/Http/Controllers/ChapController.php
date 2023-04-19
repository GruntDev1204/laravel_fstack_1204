<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChapSignup;
use App\Http\Requests\loginUser;
use App\Mail\MailKichHoatUser;
use App\Models\Agent;
use App\Models\Chap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ChapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signupview()
    {
       return view('user.signup');
    }

    public function manager(){
        return view('user.manager');
    }


    public function createUser(ChapSignup $request)
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

        $dataChap = $request->all();
        $dataChap['hash']       = Str::uuid();
        $dataChap['ho_lot']     = $firstname;
        $dataChap['ten']        = $lastname;
        $dataChap['thanh_pho']  = "Trái Đất";
        $dataChap['password']   = bcrypt($request->password);
        Chap::create($dataChap);

        Mail::to($request->email)->send(new MailKichHoatUser(
            $request->ho_va_ten,
            $dataChap['hash'],
            'Kích Hoạt Loại Tài Khoản : User'
        ));
       return response()->json(['status' => true]);

    }

    public function login()
    {
        return view('user.login');
    }

    public function loginStatus(loginUser $request){
        $data  = $request->all();
        $check = Auth::guard('chap')->attempt($data);
        if($check) {
            // Đã login thành công!!!
            $chap = Auth::guard('chap')->user();
            if($chap->is_vail) {
                return response()->json(['status' => 2]);
            } else {
                //Chưa kích hoạt mail
                Auth::guard('chap')->logout();
                return response()->json(['status' => 1]);
            }
        } else {
            //Login thất bại
            return response()->json(['status' => 0]);
        }

    }

    public function active($hash)
    {
        $user = Chap::where('hash', $hash)->first();
        if($user->is_vail) {
            toastr()->warning('Tài khoản của bạn đã được kích hoạt trước đó! Loại tài khoản : User');
        } else {
            $user->is_vail = 1;
            $user->save();
            toastr()->success('Tài khoản của bạn đã được kích hoạt! loại tài khoản : User');
        }
        return redirect('/user/login');

    }
    public function logout(){
        Auth::guard("chap")->logout();
        return redirect("/client");
    }

    public function showdata(){
        $user = Chap::all();
        return response()->json([
            'user' => $user,
        ]);
    }
    public function changeBlock($id){
        $user = Chap::find($id);
        $user->is_block = !$user->is_block;
        $user->save();
        return response()->json(['status' => true]);

    }

    public function destroyID($id){
        $user = Chap::find($id);
        if($user){
            $user->delete();
            return response()->json(['user' => true,]);
        }
        else{
            return response()->json(['user' => false,]);
        }
    }

}

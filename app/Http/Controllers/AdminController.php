<?php

namespace App\Http\Controllers;

use App\Http\Requests\adminLogin;
use App\Http\Requests\createAdmin;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{

    public function homeview(){
       return view('new_admin.home');
    }

    public function Error(){
        return view('new_admin.Error');
    }
    public function allow(){
        return view('new_admin.Notallow');
    }

    public function index()
    {
        return view('Createadmin.index');
    }


    public function create(createAdmin $request)
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
        $data['password']   = bcrypt($request->password);
        admin::create($data);
        return response()->json([
            'status'    => true,
        ]);
    }


    public function view()
    {
        return view('createAdmin.kichhoatadmin');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function showdata()
    {
        $admin = admin::all();
        return response()->json([
            'adminSIDA'   => $admin,
        ]);
    }


    //truy cập admin
    public function login()
    {
       return view('new_admin.login');
    }
    public function loginSecurity(adminLogin $request){
        $data  = $request->all();
        $check = Auth::guard('admin')->attempt($data);
        if($check){
            $admin = Auth::guard('admin')->user();
            // dd($request->toArray());

            if($admin->is_allow){
                return response()->json([
                    'action' => 1,
                ]);
            } else {
                Auth::guard("admin")->logout();
                return response()->json(['action' => 2]);
            }
        }else{
            return response()->json(['action' => 0]);
        }
    }


    public function changeAllow($id)
    {
        $admin = admin::find($id);
        $admin->is_allow = !$admin->is_allow;
        $admin->save();
        return response()->json(['status' => true]);
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function block($id)
    {
        $admin = admin::find($id);
        $admin->is_block = !$admin->is_block;
        $admin->save();
        return response()->json(['status' => true]);
    }
    public function cancel($id){
        $admin = admin::find($id);
        if($admin){
            $admin->delete();
            return response()->json(['admin' => true,]);
        }
        else{
            return response()->json(['admin' => false,]);
        }
    }
    public function logout(){
        Auth::guard("admin")->logout();
        return redirect("/admin/home");
    }

}



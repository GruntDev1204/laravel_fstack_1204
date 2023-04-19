<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddMembers;
use App\Http\Requests\ChangeInfoAdmin;
use App\Http\Requests\ChatClient;
use App\Http\Requests\editNumber;
use App\Http\Requests\LoginAdmin;
use App\Http\Requests\newStr;
use App\Http\Requests\SignUpAdmin;
use App\Http\Requests\Timeline;
use App\Http\Requests\TokenEdit;
use App\Http\Requests\UpdateInfoMember;
use App\Http\Requests\UpdateTimeline;
use App\Models\AdminSndg;
use App\Models\Agent;
use App\Models\Chart;
use App\Models\ChatClient as ModelsChatClient;
use App\Models\members;
use App\Models\theStory;
use App\Models\timeline as ModelsTimeline;
use App\Models\updatedNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class snopeDoge extends Controller
{

    //number
    public function index()
    {
        return view('dogechain.index');
    }
    public function adminIndex()
    {
        $check = Auth::guard('AdminSndg')->check();
        if ($check) {
            return view('dogechain.admin.indexView');
        } else {
            toastr()->warning('pls login');
            return redirect('/sndg/admin/setting/manager/login');
        }
    }
    public function view()
    {
        return view('dogechain.admin.formatnumber');
    }
    public function loadNumber()
    {
        $data = updatedNumber::all();
        return response()->json(['viewnumbers' => $data]);
    }
    public function editNumber($id)
    {
        $number = updatedNumber::find($id);
        if ($number) {
            return response()->json([
                'status'  =>  true,
                'socanchinhsua'    =>  $number
            ]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }
    public function updated(editNumber $request)
    {
        $number = updatedNumber::find($request->id);
        $data = $request->all();
        $number->update($data);

        return response()->json([
            'status' => true,
        ]);
    }



    //story

    public function viewStr()
    {
        return view('dogechain.admin.story');
    }
    public function loadStr()
    {
        $data = theStory::all();
        return response()->json(['theSTR' => $data]);
    }
    public function editStr($id)
    {
        $cauchuyen = theStory::find($id);
        if ($cauchuyen) {
            return response()->json([
                'status'  =>  true,
                'newCauchuyen'    =>  $cauchuyen
            ]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }
    public function updateStr(newStr $request)
    {
        $cauchuyen  = theStory::find($request->id);
        $data = $request->all();
        $cauchuyen->update($data);
        return response()->json([
            'status' => true,
        ]);
    }



    //timeline(roadmap)
    public function timeLineIndex()
    {
        return view('dogechain.admin.addTimeline');
    }
    public function addTimeline(Timeline $request)
    {

        ModelsTimeline::create([
            'month'   =>  empty($request->month) ? 0 : $request->month,
            'is_line_one'     => 0,
            'is_line_two'     => 0,
            'is_line_three'     => 0,
            'is_line_four'     => 0,
            'is_line_five'     => 0,
            'week'      =>  $request->week,
            'line_one'     =>  $request->line_one,
            'line_two'          =>  $request->line_two,
            'line_three'           =>  $request->line_three,
            'line_four'     =>  $request->line_four,
            'line_five'     =>  $request->line_five,
        ]);
        return response()->json(['status' => true]);
    }
    public function loadDataTimeline()
    {
        $data = ModelsTimeline::all();
        return response()->json(['roadmap' => $data]);
    }
    public function editRoadmap($id)
    {
        $road = ModelsTimeline::find($id);
        if ($road) {
            return response()->json([
                'status'  =>  true,
                'roadmapTimeline'    =>  $road
            ]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }
    public function updatedTimeline(UpdateTimeline  $request)
    {
        $roadMapedit  = ModelsTimeline::find($request->id);
        $data = $request->all();
        $roadMapedit->update($data);
        return response()->json([
            'status' => true,
        ]);
    }
    public function deleteTimeline($id)
    {
        $road = ModelsTimeline::find($id);
        if ($road) {
            $road->delete();
            return response()->json(['status' => true,]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }
    public function isLine1($id)
    {
        $data = ModelsTimeline::find($id);
        $data->is_line_one = !$data->is_line_one;
        $data->save();
        return response()->json(['status' => true]);
    }
    public function isLine2($id)
    {
        $data = ModelsTimeline::find($id);
        $data->is_line_two = !$data->is_line_two;
        $data->save();
        return response()->json(['status' => true]);
    }

    public function isLine3($id)
    {
        $data = ModelsTimeline::find($id);
        $data->is_line_three = !$data->is_line_three;
        $data->save();
        return response()->json(['status' => true]);
    }
    public function isLine4($id)
    {
        $data = ModelsTimeline::find($id);
        $data->is_line_four = !$data->is_line_four;
        $data->save();
        return response()->json(['status' => true]);
    }
    public function isLine5($id)
    {
        $data = ModelsTimeline::find($id);
        $data->is_line_five = !$data->is_line_five;
        $data->save();
        return response()->json(['status' => true]);
    }


    //add Members
    public function memberIndex()
    {
        return view('dogechain.admin.members');
    }
    public function managerMember(AddMembers $request)
    {
        $data = $request->all();
        members::create($data);

        return response()->json([
            'status'    => true,
        ]);
    }
    public function loadMember()
    {
        $mems = members::all();
        return response()->json([
            'thanhvienlist'   => $mems,
        ]);
    }
    public function deletedMember($id)
    {
        $mems = members::find($id);
        if ($mems) {
            $mems->delete();
            return response()->json(['status' => true,]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }
    public function editmemBer($id)
    {
        $mems = members::find($id);
        if ($mems) {
            return response()->json([
                'status' => true,
                'MemberEdit' => $mems
            ]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }
    public function UpdateMem(UpdateInfoMember $request)
    {
        $mems  = members::find($request->id);
        $data = $request->all();
        $mems->update($data);
        return response()->json([
            'status' => true,
        ]);
    }




    //admin login
    public function adminSignupForm()
    {
        $check = Auth::guard('AdminSndg')->check();
        if ($check) {
            toastr()->info('bạn đã thực sự đăng nhập');
            return redirect('/sndg/admin/setting/home');
        } else {
            return view('dogechain.admin.signupForm');
        }
    }
    public function adminSingUp(SignUpAdmin $request)
    {
        $data = $request->all();
        $data['password']   = bcrypt($request->password);
        AdminSndg::create($data);
        return response()->json([
            'status'    => true,
        ]);
    }



    public function adminLoginForm()
    {
        $check = Auth::guard('AdminSndg')->check();
        if ($check) {
            toastr()->info('bạn đã thực sự đăng nhập');
            return redirect('/sndg/admin/setting/home');
        } else {
            return view('dogechain.admin.loginForm');
        }
    }

    public function adminlogin(LoginAdmin $request)
    {
        $data  = $request->all();
        $check = Auth::guard('AdminSndg')->attempt($data);
        if ($check) {
            $AdminSndg = Auth::guard('AdminSndg')->user();
            if ($AdminSndg->is_allow) {
                return response()->json(['status' => 2]);
            } else {
                Auth::guard('AdminSndg')->logout();
                return response()->json(['status' => 1]);
            }
        } else {
            //Login thất bại
            return response()->json(['status' => 0]);
        }
    }

    public function logoutAdmin()
    {
        $check = Auth::guard('AdminSndg')->check();
        if ($check) {
            Auth::guard("AdminSndg")->logout();
            return redirect("/sndg/admin/setting/manager/login");
        } else {
            toastr()->error('có lỗi ko thể xác định được');
            return redirect("/sndg/admin/setting/manager/login");
        }
    }


    //manager Admin
    public function loadAdminIndex()
    {
        $check =    Auth::guard('AdminSndg')->check();
        if ($check) {
            if (Auth::guard('AdminSndg')->user()->is_own == 1) {
                return view('dogechain.admin.manageradmin');
            } else {
                toastr()->warning('bạn ko được phép truy cập');
                return redirect("/sndg/admin/setting/home");
            }
        } else {
            toastr()->warning('pls login');
            return redirect("/sndg/admin/setting/manager/login");
        }
    }

    public function loadAdminData()
    {
        $check =    Auth::guard('AdminSndg')->check();
        if ($check) {
            if (Auth::guard('AdminSndg')->user()->is_own == 1) {
                $admin = AdminSndg::all();
                return response()->json([
                    'listAdmins'   => $admin,
                ]);
            }
        }
    }
    public function allowed($id)
    {
        $check =    Auth::guard('AdminSndg')->check();
        if ($check) {
            if (Auth::guard('AdminSndg')->user()->is_own == 1) {
                $data = AdminSndg::find($id);
                $data->is_allow = !$data->is_allow;
                $data->save();
                return response()->json(['status' => true]);
            }
        }
    }
    public function owner($id)
    {
        $check =    Auth::guard('AdminSndg')->check();
        if ($check) {
            if (Auth::guard('AdminSndg')->user()->is_own == 1) {
                $data = AdminSndg::find($id);
                $data->is_own = !$data->is_own;
                $data->save();
                return response()->json(['status' => true]);
            }
        }
    }
    public function DeleteAdmin($id)
    {
        $data = AdminSndg::find($id);
        if ($data) {
            $data->delete();
            return response()->json(['status' => true,]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }
    public function EditAdmin($id)
    {
        $admin = AdminSndg::find($id);
        if ($admin) {
            return response()->json([
                'status' => true,
                'AdminsEdit' => $admin
            ]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }
    public function changeInfoAdmin(ChangeInfoAdmin $request)
    {
        $check =    Auth::guard('AdminSndg')->check();
        if ($check) {
            if (Auth::guard('AdminSndg')->user()->is_own == 1) {
                $admins  = AdminSndg::find($request->id);
                $data = $request->all();
                $admins->update($data);
                return response()->json([
                    'status' => true,
                ]);
            }
        }
    }



    //tokenomic
    public function indexEditToken()
    {
        $check = Auth::guard('AdminSndg')->check();
        if ($check) {
            return view('dogechain.admin.tokenomics');
        } else {
            toastr()->warning('pls login');
            return redirect('/sndg/admin/setting/manager/login');
        }
    }
    public function loadToken()
    {
        $token = Chart::all();
        return response()->json([
            'tokenTS'   => $token,
        ]);
    }
    public function EditToken($id)
    {
        $token = Chart::find($id);
        if ($token) {
            return response()->json([
                'status' => true,
                'tokenInfo' => $token
            ]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }
    public function updatedToken(TokenEdit $request)
    {
        $tokenInfo  = Chart::find($request->id);
        $data = $request->all();
        $tokenInfo->update($data);
        return response()->json([
            'status' => true,
        ]);
    }

    //chat client





}

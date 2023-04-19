<?php

namespace App\Http\Controllers;

use App\Http\Requests\createPeople;
use App\Http\Requests\loginPeople;
use App\Http\Requests\PostCreate;
use App\Mail\activePeople;
use App\Mail\MailKichHoatDaiLy;
use App\Models\addPost;
use App\Models\Cmt;
use App\Models\followed;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\Null_;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSignup()
    {
        $check = Auth::guard('people')->check();
        if (!$check) {
            return view('blogs.indexUser.create');
        } else {
            toastr()->info('you are logged in!');
            return redirect('/home');
        }
    }
    public function follow($id){
        $check = Auth::guard('people')->check();
        if($check){
            $people = People::find($id);

            $data['id_user'] = Auth::guard('people')->id();
            $data['id_user_another'] = $people->id;
            $data['is_followed'] = 1;
            followed::create($data);

            $people->follower++;
            $people->save();
            toastr()->success('followed!');
            return redirect()->back();
        } else{
            return redirect('/people/login');
            toastr()->warning('pls login!');
        }
    }

    public function unfollow($id,$id_people){
        $check = Auth::guard('people')->check();
        if($check){
            $unfollowed = followed::find($id);
            $unfollowed->is_followed =  0;
            $unfollowed->save();

            $people = People::find($id_people);
            $people->follower--;
            $people->save();
            toastr()->success('Unfollowed!');
            return redirect()->back();

        } else{
            return redirect('/people/login');
        }
    }

    public function showFollow(){
        $data = followed::all();
        return response()->json([
             'dataFollow' =>$data
        ]);

    }

    public function indexUser()
    {
        return view('blogs.indexMaster.classify.peopleList');
    }

    public function loadCommunity()
    {
        $data = People::all();
        return response()->json(
            [
                'dataCommunity' => $data,
                'status' => true,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(createPeople $request)
    {
        $data = $request->all();
        $data['hash']       = Str::uuid();
        $data['avatar'] =  empty($request->avatar) ? '/user.png' : $request->avatar;
        $data['detail'] =  empty($request->detail) ? 0 : $request->detail;
        $data['education'] =  empty($request->education) ? 0 : $request->education;
        $data['skill'] =  empty($request->skill) ? 0 : $request->skill;
        $data['note'] =  empty($request->note) ? 0 : $request->note;
        $data['location'] =  empty($request->location) ? 0 : $request->location;
        $data['sdt'] = $request->sdt;
        $data['birth'] =   $request->birth;
        $data['password']   = bcrypt($request->password);
        People::create($data);
        Mail::to($request->email)->send(new activePeople(
            $request->ho_va_ten,
            $data['hash'],
            "Active people's Account!"
        ));

        return response()->json(['status' => true]);
    }

    public function MailViewActive($hash)
    {
        $data = People::where('hash', $hash)->first();
        if ($data) {
            if ($data->is_allow == 1) {
                toastr()->info('previously verified account!');
                return redirect('/people/login');
            } else {
                $ho_va_ten = $data->ho_va_ten;
                $email = $data->email;
                return view('mail.allowedForm', compact('hash', 'ho_va_ten', 'email'));
            }
        } else {
            toastr()->error('request has expired');
            return redirect('/people/signup');
        }
    }

    public function active($hash)
    {
        $people = People::where('hash', $hash)->first();
        $people->is_allow = 1;
        $people->save();
        toastr()->success('verified account!');
        return redirect('/people/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function IndexLogin()
    {
        $check = Auth::guard('people')->check();
        if (!$check) {
            return view('blogs.indexUser.login');
        } else {
            toastr()->info('you are logged in!');
            return redirect('/home');
        }
    }

    public function getPost($id)
    {
        $data = addPost::find($id);
        if ($data) {
            return response()->json(
                [
                    'status' => true,
                    'id_post'=>$data->id
                ]
            );
        }
    }
    public function postCmt(Request $request)
    {
        $check = Auth::guard('people')->check();
        $data_post = addPost::where('id', $request->id)->first();
        if ($check) {
            $data = $request->all();
            $data['id_people'] = Auth::guard('people')->id();
            $data['id_post'] =   $request->id;
            $data['content'] =  $request->content;
            Cmt::create($data);
            return response()->json(
                ['status' => true]
            );
        } else {
            toastr()->error('login pls!');
            return redirect('/people/login');
        }
    }


    public function loginAction(loginPeople $request)
    {
        $data  = $request->all();
        $check = Auth::guard('people')->attempt($data);
        if ($check) {
            // Đã login thành công!!!
            $people = Auth::guard('people')->user();
            if ($people->is_allow) {
                return response()->json(['status' => 2]);
            } else {
                Auth::guard('people')->logout();
                return response()->json(['status' => 1]);
            }
        } else {
            //Login thất bại
            return response()->json(['status' => 0]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::guard('people')->logout();
        return redirect("/people/login");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function createPostimg(PostCreate $request)
    {
        $check = Auth::guard('people')->check();
        if ($check) {
            $data = $request->all();
            $data['id_people'] = Auth::guard('people')->id();
            $data['img'] = $request->img;
            $data['content'] = $request->content;
            addPost::create($data);
            toastr()->success('post successfully!');
            return response()->json([
                'status' => true,
            ]);
        } else {
            toastr()->error('login pls!');
            return redirect('/people/login');
        }
    }


    public function loadMyProfile()
    {
        $check = Auth::guard('people')->check();
        if ($check) {
            $id = Auth::guard('people')->id();
            if ($id) {
                $data = People::find($id);
                return response()->json([
                    'status' => true,
                    'DataPeople' => $data,
                ]);
            }
        } else {
            return redirect('/home');
        }
    }

    public function findInfo($id)
    {
        $data = People::find($id);
        if ($data) {
            $check = Auth::guard('people')->check();
            if ($check) {
                $id_gan = Auth::guard('people')->id();
                if ($id == $id_gan) {
                    $data = People::find($id);
                    return response()->json([
                        'status' => true,
                        'dataEdit' => $data,
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                    ]);
                }
            } else {
                toastr()->error('there is an unspecified error');
                return redirect('/home');
            }
        } else {
            toastr()->error('there is an unspecified error');
            return redirect('/home');
        }
    }

    public function updateInfo(Request $request)
    {
        $check = Auth::guard('people')->check();
        if ($check) {
            $data = $request->all();
            $data_id = Auth::guard('people')->id();
            $Info = People::find($data_id);
            $Info->update($data);
        }
        return response()->json([
            'status' => true,
        ]);
    }

    public function upAvatar(Request $request)
    {
        $check = Auth::guard('people')->check();
        if ($check) {
            $img = $request->all();
            $data = Auth::guard('people')->id();
            $Info = People::find($data);
            $Info->update($img);
            toastr()->success('done avatar');
            return response()->json(['status'=>true]);
        } else {
            toastr()->error('problem 010~!');
        }
    }
}

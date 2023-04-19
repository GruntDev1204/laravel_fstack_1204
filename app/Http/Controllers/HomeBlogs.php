<?php

namespace App\Http\Controllers;

use App\Models\addPost;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeBlogs extends Controller
{
    public function index()
    {
        $check = Auth::guard('people')->check();
        if ($check) {
            $id_people_me = Auth::guard('people')->id();
            $avatar = Auth::guard('people')->user()->avatar;
            return view('blogs.indexMaster.blogs',compact('id_people_me' ,'avatar'));
        } else {
            toastr()->warning('pls login');
            return redirect('/people/login');
        }
    }

    public function changeActionPost($id){
        $check = Auth::guard('people')->check();
        if($check){
            $id_myself = Auth::guard('people')->id();
            $data_post = addPost::where('id_people' , $id_myself)->where('id' , $id)->first();
            if($data_post){
                $data = addPost::find($data_post->id);
                $data->action = !$data->action;
                $data->save();
                return response()->json([
                    'status' => true,
                ]);
            }else{
                return response()->json([
                    'status' => false,
                ]);
            }
        }else{
            toastr()->warning('pls login!');
            return redirect('/people/login');
        }
    }


    public function indexPrivate(){
        $check = Auth::guard('people')->check();
        if($check){
        return view('blogs.indexUser.classifyProfile.private');
        }else {
            toastr()->warning('pls login');
            return redirect('/people/login');
        }
    }

    public function LoadPrivate()
    {
        $check = Auth::guard('people')->check();
        if($check){
            $id_myself =  $check = Auth::guard('people')->id();
            $dataMyPost = addPost::join('people', 'add_posts.id_people', 'people.id')
            ->select('add_posts.*', 'people.ho_va_ten' , 'people.avatar' )->where('id_people', $id_myself)->where('action' , 0)->get();
            return response()->json(
                [
                    'DataPrivate' =>   $dataMyPost
                ]
            );
        }
    }

    public function loadPostClient()
    {
        $data = addPost::join('people', 'add_posts.id_people', 'people.id')
            ->select('add_posts.*', 'people.ho_va_ten' , 'people.avatar')->where('action' , 1)
            ->get();

        return response()->json([
            'dataPostHome' =>  $data,
        ]);
    }



    public function loadProfilePost($id)
    {
        $profile = People::find($id);
        if ($profile) {
            $DataProfile = addPost::join('people', 'add_posts.id_people', 'people.id')
                ->select('add_posts.*', 'people.ho_va_ten')->where('id_people', $id)->where('action' , 1)->get();
            return view('blogs.indexUser.profile', compact('profile','DataProfile'));
        } else {
            toastr()->error('User does not exist');
            return redirect('/home');
        }
    }


}

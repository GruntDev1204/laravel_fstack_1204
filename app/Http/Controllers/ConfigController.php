<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        $config = Config::latest()->first();

        return view('new_admin.pages.config.index', compact('config'));
    }


    public function store(Request $request)
    {
        $data = $request->all();

        Config::create($data);
        toastr()->success("Đã cập nhật cấu hình thành công!!!");

        return redirect()->back();
    }

}

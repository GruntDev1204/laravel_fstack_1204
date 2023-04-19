<?php

namespace App\Http\Controllers;

use App\Http\Requests\KiemTraDuLieuTaoSanPham;
use App\Http\Requests\UpdateSanPhamRequest;
use App\Models\DanhMucSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamVueController extends Controller
{
    public function index()
    {
        return view('new_admin.pages.san_pham.index_vue');
    }
    public function loadData()
    {
        $danhSachDanhMuc = DanhMucSanPham::all();
        $danhSachSanPham = SanPham::join('danh_muc_san_phams', 'san_phams.id_danh_muc', 'danh_muc_san_phams.id')
                                  ->select('san_phams.*', 'danh_muc_san_phams.ten_danh_muc')
                                  ->get();
        return response()->json([
            'danhSachDanhMuc'   => $danhSachDanhMuc,
            'danhSachSanPham'   => $danhSachSanPham
        ]);
    }
    public function store(KiemTraDuLieuTaoSanPham $request)
    {
        $data = $request->all();
        $sanPham = SanPham::create($data);

        return response()->json([
            'status'    => true,
            'sanPham'   => $sanPham,
        ]);
    }
    public function update(UpdateSanPhamRequest $request)
    {
        $sanPham = SanPham::find($request->id);
        $data = $request->all();
        $sanPham->update($data);

        return response()->json([
            'status' => true,
        ]);
    }
    public function edit($id)
    {
        $san_pham = SanPham::find($id);
        if($san_pham) {
            return response()->json([
                'status'  =>  true,
                'sanPham'    =>  $san_pham
            ]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }
    public function delete($id)
    {
        $san_pham = SanPham::find($id);
        if($san_pham) {
            $san_pham->delete();
            return response()->json(['status' => true]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }

    public function changeStatus($id)
    {
        $san_pham = SanPham::find($id);
        if($san_pham) {
            $san_pham->is_open = !$san_pham->is_open;
            // if($san_pham->is_open == 1) {
            //     $san_pham->is_open = 0;
            // } else {
            //     $san_pham->is_open = 1;
            // }
            $san_pham->save();
            return response()->json(['status' => true]);
        }
    }

    public function search(Request $request)
    {
        $data = SanPham::where('ten_san_pham', 'like', '%' . $request->tenSanPham .'%')->get();

        return response()->json(['dataProduct' => $data]);
    }
}

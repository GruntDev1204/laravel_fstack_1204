<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDonHang;
use App\Models\Config;
use App\Models\DanhMucSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomePageController extends Controller
{
    public function index()
    {
        $config  = Config::latest()->first();

        $sql = "SELECT *, (`gia_ban` - `gia_khuyen_mai`) / `gia_ban` * 100 AS `TYLE` FROM `san_phams` ORDER BY TYLE DESC";

        $allSanPham = DB::select($sql);

        $soluong = ChiTietDonHang::where('is_cart', 1)->get();

        return view('home_page.pages.home_page', compact('config', 'allSanPham' ,'soluong'));
    }

    public function viewSanPham($id)
    {
        while(strpos($id, 'post')) {
            $viTri = strpos($id, 'post');
            $id = Str::substr($id, $viTri + 4);
        }

        $sanPham = SanPham::find($id);

        $allSanPham = SanPham::where('id_danh_muc', $sanPham->id_danh_muc)->get();


        if($sanPham) {
            return view('home_page.pages.detail_san_pham', compact('sanPham', 'allSanPham'));
        } else {
            return redirect('/client');
        }
    }

    public function viewDanhMuc($id)
    {

        while(strpos($id, 'post')) {
            $viTri = strpos($id, 'post');
            $id = Str::substr($id, $viTri + 4);
        }

        $danhMuc = DanhMucSanPham::find($id);
        if($danhMuc) {
            // Nếu là danh mục con
            if($danhMuc->id_danh_muc_cha > 0) {
                $sanPham = SanPham::where('is_open', 1)
                                  ->where('id_danh_muc', $danhMuc->id)
                                  ->get();
            } else {
                // Nó là danh mục cha. Tìm toàn bộ danh mục con
                $danhMucCon = DanhMucSanPham::where('id_danh_muc_cha', $danhMuc->id)
                                            ->get();
                $danhSach   = $danhMuc->id;
                foreach($danhMucCon as $key => $value) {
                    $danhSach = $danhSach . ',' . $value->id;
                }
                $sanPham = SanPham::whereIn('id_danh_muc', explode(",", $danhSach))->get();
            }

            return view('home_page.pages.san_pham', compact('sanPham'));
        }
    }
}

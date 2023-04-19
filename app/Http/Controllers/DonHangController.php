<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDonHang;
use App\Models\DonHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DonHangController extends Controller
{
    public function view()
    {
        return view('home_page.pages.cart.yourcart');
    }

    public function dondathangView(){
        return view('home_page.pages.cart.donhangdanggiao');
    }

    public function donhangManager(){
        $user = Auth::guard('chap')->user();
        $agent = Auth::guard('agent')->user();
        if($user){
            $giohang = ChiTietDonHang::where('is_cart', 0)
            ->where('user_id', $user->id)
            ->where('agent_id', 0)
            ->get();

            $donmua = DonHang::where('is_dat_hang', 1)
            ->where('user_id', $user->id)
            ->where('agent_id', 0)
            ->get();
            return response()->json([
                'status' => 1,
                'dataddhU' => $giohang,
                'donmuaU' => $donmua,
            ]);
        }elseif($agent){
            $giohang = ChiTietDonHang::where('is_cart', 0)
            ->where('user_id', 0)
            ->where('agent_id', $agent->id)
            ->get();

            $donmua = DonHang::where('is_dat_hang', 1)
            ->where('user_id', 0)
            ->where('agent_id', $agent->id)
            ->get();
            return response()->json([
                'status' => 2,
                'dataddhA' => $giohang,
                'donmuaA' => $donmua,
            ]);
        }
    }
    public function store()
    {
        $agent = Auth::guard('agent')->user();
        $user = Auth::guard('chap')->user();
        if ($agent) {
            $giohang = ChiTietDonHang::where('is_cart', 1)
                ->where('agent_id', $agent->id)
                ->where('user_id', 0)
                ->get();
            if (empty($giohang) || count($giohang) > 0) {
                //tạo đơn hàng
                $donhang = DonHang::create([
                    'ma_don_hang' => Str::uuid(),
                    'tong_tien' => 0,
                    'tien_giam_gia' => 0,
                    'thuc_tra' => 0,
                    'agent_id' => $agent->id,
                    'user_id' => 0,
                    'loai_thanh_toan' => 1,
                ]);
                $thuc_tra = 0;
                $tong_tien = 0;

                //chuyển giỏ hàng thành đơn hàng
                foreach ($giohang as $value) {
                    $thangsanpham = SanPham::find($value->san_pham_id);
                    if ($thangsanpham) {
                        $giaban = $thangsanpham->gia_khuyen_mai ? $thangsanpham->gia_khuyen_mai : $thangsanpham->gia_ban;
                        $thuc_tra += $value->so_luong * $giaban;
                        $tong_tien += $value->so_luong * $thangsanpham->gia_ban;
                        $value->don_gia = $giaban;

                        $value->is_cart = 0;
                        $value->don_hang_id = $donhang->id;
                        $value->save();
                    } else {
                        $value->delete();
                    }
                }
                $donhang->thuc_tra = $thuc_tra;
                $donhang->tong_tien = $tong_tien;
                $donhang->tien_giam_gia = $tong_tien - $thuc_tra;
                $donhang->save();

                return response([
                    'status' => 1,
                ]);
            } else {
                return response([
                    'status' => 2,
                ]);
            }
        } else if ($user) {
            $giohang = ChiTietDonHang::where('is_cart', 1)
                ->where('user_id', $user->id)
                ->where('agent_id', 0)
                ->get();
            if (empty($giohang) || count($giohang) > 0) {
                //tạo đơn hàng
                $donhang = DonHang::create([
                    'ma_don_hang' => Str::uuid(),
                    'tong_tien' => 0,
                    'tien_giam_gia' => 0,
                    'thuc_tra' => 0,
                    'user_id' => $user->id,
                    'agent_id' => 0,
                    'loai_thanh_toan' => 1,
                ]);
                $thuc_tra = 0;
                $tong_tien = 0;

                //chuyển giỏ hàng thành đơn hàng
                foreach ($giohang as $value) {
                    $thangsanpham = SanPham::find($value->san_pham_id);
                    if ($thangsanpham) {
                        $giaban = $thangsanpham->gia_khuyen_mai ? $thangsanpham->gia_khuyen_mai : $thangsanpham->gia_ban;
                        $thuc_tra += $value->so_luong * $giaban;
                        $tong_tien += $value->so_luong * $thangsanpham->gia_ban;
                        $value->don_gia = $giaban;

                        $value->is_cart = 0;
                        $value->don_hang_id = $donhang->id;
                        $value->save();
                    } else {
                        $value->delete();
                    }
                }
                $donhang->thuc_tra = $thuc_tra;
                $donhang->tong_tien = $tong_tien;
                $donhang->tien_giam_gia = $tong_tien - $thuc_tra;
                $donhang->save();

                return response([
                    'status' => 3,
                ]);
            } else {
                return response([
                    'status' => 4,
                ]);
            }
        }
    }
    public function changeSTT($id)
    {
        $donhang = DonHang::find($id);
        $donhang->is_giao_hang = !$donhang->is_giao_hang;
        $donhang->save();
        return response([
            'status' => true,
        ]);
    }
    public function dataDonHang()
    {
        $data = DonHang::all();
        return response()->json([
            'SIDA' => $data,
        ]);
    }
    public function viewdonhang()
    {
        return view('new_admin.pages.kho_hang.quanlydonhang');
    }
}

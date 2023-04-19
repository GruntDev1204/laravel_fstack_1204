<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Models\Chap;
use App\Models\ChiTietDonHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChiTietDonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home_page.pages.cart.index');
    }

    public function addToCart(AddToCartRequest $request)
    {
        // Phải kiểm tra xem là đã login hay chưa?
        $agent = Auth::guard('agent')->user();
        $chap = Auth::guard('chap')->user();
        if($agent) {
            $sanPham = SanPham::find($request->san_pham_id);

            $chiTietDonHang = ChiTietDonHang::where('san_pham_id', $request->san_pham_id)
                                            ->where('is_cart', 1)
                                            ->where('agent_id', $agent->id)
                                            ->first();
            if($chiTietDonHang) {
                $chiTietDonHang->so_luong += $request->so_luong;
                $chiTietDonHang->save();
            } else {
                ChiTietDonHang::create([
                    'san_pham_id'       => $sanPham->id,
                    'ten_san_pham'      => $sanPham->ten_san_pham,
                    'don_gia'           => $sanPham->gia_khuyen_mai ? $sanPham->gia_khuyen_mai : $sanPham->gia_ban,
                    'so_luong'          => $request->so_luong,
                    'is_cart'           => 1,
                    'agent_id'          => $agent->id,
                    'user_id'           => 0,
                ]);
            }

            return response()->json(['status' => 1]);
        }
        elseif($chap){
            $sanPham = SanPham::find($request->san_pham_id);

            $chiTietDonHang = ChiTietDonHang::where('san_pham_id', $request->san_pham_id)
                                            ->where('is_cart', 1)
                                            ->where('user_id', $chap->id)
                                            ->first();
            if($chiTietDonHang) {
                $chiTietDonHang->so_luong += $request->so_luong;
                $chiTietDonHang->save();
            } else {
                ChiTietDonHang::create([
                    'san_pham_id'       => $sanPham->id,
                    'ten_san_pham'      => $sanPham->ten_san_pham,
                    'don_gia'           => $sanPham->gia_khuyen_mai ? $sanPham->gia_khuyen_mai : $sanPham->gia_ban,
                    'so_luong'          => $request->so_luong,
                    'is_cart'           => 1,
                    'user_id'          => $chap->id,
                    'agent_id'           => 0,
                ]);
            }
            return response()->json(['status' => 2]);
        }
        else {
            return response()->json(['status' => 3]);
        }
    }

    public function addToCartUpdate(AddToCartRequest $request)
    {
        // Phải kiểm tra xem là đã login hay chưa?
        $agent = Auth::guard('agent')->user();
        $chap = Auth::guard('chap')->user();
        if($agent) {
            $sanPham = SanPham::find($request->san_pham_id);

            $chiTietDonHang = ChiTietDonHang::where('san_pham_id', $request->san_pham_id)
                                            ->where('is_cart', 1)
                                            ->where('agent_id', $agent->id)
                                            ->first();
            if($chiTietDonHang) {
                $chiTietDonHang->so_luong = $request->so_luong;
                $chiTietDonHang->save();
            } else {
                ChiTietDonHang::create([
                    'san_pham_id'       => $sanPham->id,
                    'ten_san_pham'      => $sanPham->ten_san_pham,
                    'don_gia'           => $sanPham->gia_khuyen_mai ? $sanPham->gia_khuyen_mai : $sanPham->gia_ban,
                    'so_luong'          => $request->so_luong,
                    'is_cart'           => 1,
                    'agent_id'          => $agent->id,
                    'user_id'          => 0,
                ]);
            }

            return response()->json(['status' => 1]);
        }elseif($chap)
        {
            $sanPham = SanPham::find($request->san_pham_id);

            $chiTietDonHang = ChiTietDonHang::where('san_pham_id', $request->san_pham_id)
                                            ->where('is_cart', 1)
                                            ->where('user_id', $chap->id)
                                            ->first();
            if($chiTietDonHang) {
                $chiTietDonHang->so_luong = $request->so_luong;
                $chiTietDonHang->save();
            } else {
                ChiTietDonHang::create([
                    'san_pham_id'       => $sanPham->id,
                    'ten_san_pham'      => $sanPham->ten_san_pham,
                    'don_gia'           => $sanPham->gia_khuyen_mai ? $sanPham->gia_khuyen_mai : $sanPham->gia_ban,
                    'so_luong'          => $request->so_luong,
                    'is_cart'           => 1,
                    'user_id'          => $chap->id,
                    'agent_id'          => 0,
                ]);
            }

            return response()->json(['status' => 2]);
        } else
        {
            return response()->json(['status' => 3]);
        }
    }

    public function removeCart(Request $request)
    {
        $agent = Auth::guard('agent')->user();
        $chap = Auth::guard('chap')->user();
        if($agent) {
            $chiTietDonHangAgent = ChiTietDonHang::where('is_cart', 1)
                                            ->where('user_id', 0)
                                            ->where('agent_id', $agent->id)
                                            ->where('san_pham_id', $request->san_pham_id)
                                            ->first();
            $chiTietDonHangAgent->delete();
        }elseif($chap){
            $chiTietDonHangUser = ChiTietDonHang::where('is_cart', 1)
                                            ->where('agent_id', 0)
                                            ->where('user_id', $chap->id)
                                            ->where('san_pham_id', $request->san_pham_id)
                                            ->first();
            $chiTietDonHangUser->delete();
        }
    }

    public function dataCart()
    {
        $agent = Auth::guard('agent')->user();
        $chap = Auth::guard('chap')->user();
        if($agent) {
            $dataagent = ChiTietDonHang::join('san_phams', 'chi_tiet_don_hangs.san_pham_id', 'san_phams.id')
                                  ->where('agent_id', $agent->id)
                                  ->where('user_id', 0)
                                  ->where('is_cart', 1)
                                  ->select('chi_tiet_don_hangs.*', 'san_phams.anh_dai_dien')
                                  ->get();
            return response()->json([
                'status' => 1,
                'dataDaiLy' => $dataagent
            ]);
        }elseif($chap){
            $datachap = ChiTietDonHang::join('san_phams', 'chi_tiet_don_hangs.san_pham_id', 'san_phams.id')
                                        ->where('user_id', $chap->id)
                                        ->where('agent_id', 0)
                                        ->where('is_cart', 1)
                                        ->select('chi_tiet_don_hangs.*', 'san_phams.anh_dai_dien')
                                        ->get();
            return response()->json([
                'status' => 2,
                'dataKhachHang' => $datachap
            ]);
        }
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChiTietDonHang  $chiTietDonHang
     * @return \Illuminate\Http\Response
     */
    public function show(ChiTietDonHang $chiTietDonHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChiTietDonHang  $chiTietDonHang
     * @return \Illuminate\Http\Response
     */
    public function edit(ChiTietDonHang $chiTietDonHang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChiTietDonHang  $chiTietDonHang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChiTietDonHang $chiTietDonHang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChiTietDonHang  $chiTietDonHang
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChiTietDonHang $chiTietDonHang)
    {
        //
    }
}

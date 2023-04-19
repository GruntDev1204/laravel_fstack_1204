@extends('dogechain.admin.indexAdmin')
@section('indexSetting')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" style="color:rgb(128, 253, 10) "><b> <i class="fa-solid fa-house-user"></i> Home
                            </b></h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="alert alert-success text-center">
                            <marquee>
                                <h3><b>Chào mừng đến với Bình Nguyên Vô Tận!</b></h3>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>

            @if (Auth::guard('AdminSndg')->check())
                <div class="container-fluid">

                    <div class="row mt-5">
                        <div class="container">
                            <div class="alert alert-info text-center ">
                                <div class="row">
                                    <h4>
                                        <b><i class="fa-solid fa-circle-info"></i> Info Admins :  <i class="fa-solid fa-user-gear"></i>
                                            {{ Auth::guard('AdminSndg')->user()->ho_va_ten }}</b>
                                    </h4>
                                </div>

                                <div class="row mt-2">
                                    <b> Số điện thoại :  {{ Auth::guard('AdminSndg')->user()->sdt }}</b>
                                </div>
                                <div class="row">
                                    <b> Thành gian Đăng kí :  {{ Auth::guard('AdminSndg')->user()->created_at }}</b>
                                </div>
                                @if (Auth::guard('AdminSndg')->user()->is_own == 1)
                                <div class="row">
                                    <b> Chức năng cao nhất : <i class="fa-solid fa-house-user"></i>  Quyền điều hành</b>
                                </div>
                                <div class="row mt-3">
                                    <div class="container">
                                        <img src="/dogechain/img/ceo.png" class="img-fluid"
                                            style="height: 300px;width 100%;border-radius:20px">
                                    </div>
                                </div>
                                @else
                                <div class="row">
                                    <b> Chức năng cao nhất : <i class="fa-solid fa-user-gear"></i>  Quyền cộng tác và quản lý</b>
                                </div>
                                <div class="row mt-3">
                                    <div class="container">
                                        <img src="/dogechain/img/ctv.png" class="img-fluid"
                                            style="height: 300px;width 100%;border-radius:20px">
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </section>
    </div>
@endsection

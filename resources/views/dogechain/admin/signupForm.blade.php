@extends('dogechain.admin.indexAdmin')
@section('indexSetting')
    <div class="content-wrapper" id="editAdmin">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Form information </h1>
                    </div>
                </div>
            </div>
        </div>
        @if(Auth::guard('AdminSndg')->check())
        <section class="content">
            <div class="container-fluid">
                <div class="alert alert-info"> Vô đây làm chi nữa ???? {{Auth::guard('AdminSndg')->user()->ho_va_ten}}</div>
            </div>
        </section>
        @else
        <section class="content">
            <div class="container-fluid">
                <!-- /.row  introduce-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="height: auto;">
                            <div class="card-header">
                                <h3 class="card-title" style="color:yellow;">Đăng kí quyền Admin SNDG</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col  ">
                                        <div class="chart">
                                            <div class="alert alert"
                                                style="background-color:#252525  ; border-radius: 20px;padding:  40px;">
                                                <div class="container">
                                                    <div class="row">
                                                        <label><i class="fa-solid fa-user"></i>  Full Name</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="điền họ và tên của bạn" v-model="arraySIGNUP.ho_va_ten">
                                                    </div>
                                                    <div class="row mt-5">
                                                        <label><i class="fa-solid fa-phone"></i> Phone Number </label>
                                                        <input   placeholder="điền số điện thoại đăng kí của bạn"  type="text" class="form-control" v-model="arraySIGNUP.sdt">
                                                    </div>
                                                    <div class="row mt-5">
                                                        <label><i class="fa-solid fa-key"></i> Password </label>
                                                        <input type="password" class="form-control"
                                                            placeholder="điền mật khẩu bạn muốn đăng kí" v-model="arraySIGNUP.password">
                                                    </div>
                                                    <div class="row mt-5">
                                                        <label><i class="fa-solid fa-pen-nib"></i> Ghi chú lại cho ADMIN </label>
                                                        <textarea cols="20" rows="10" type="text" class="form-control" v-model="arraySIGNUP.ghi_chu"></textarea>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input " type="checkbox" value="1" v-model="arraySIGNUP.agree"
                                                                id="defaultCheck1" >
                                                            <label class="form-check-label" for="defaultCheck1">
                                                              Đồng ý với  <a  type="submit" data-toggle="modal" data-target="#Quydinhchung" style="color: greenyellow" ><i class="fa-solid fa-shield-halved"></i> quy định chung của bộ phận Admin? </a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5 ">
                                                        <button class="btn btn-success" v-on:click="createdAdmin()" ><i class="fa-solid fa-plus"></i> Sign Up </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="/ZenChan.png"
                                            class="img-fluid" style="height: auto;width: 100%;border-radius: 20%" alt="" >
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
        </section>
        @include('dogechain.admin.quydinhchungAdmins')
        @endif
    </div>
@endsection

@extends('new_admin.master')
@section('css')
<link rel="stylesheet" href="/new_assets_admin/CSSbyMySELF/solarsystem.css" type="text/css">
<link rel="stylesheet" href="/new_assets_admin/CSSbyMySELF/buttonModern.css" type="text/css">
@endsection
@section('title')
    <div class="row">
        <div class="col">
            <div class="title ">
                <h2 style="color: red"><b> Truy cập quyền Admin </b></h2>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card text-black" id="adminlogin"
        style="background-image: url('/loginview2.jpg');margin-bottom: 11cm;width:700px">
        <div class="card-body" style="height: 500px;">
            <div class="row">
                <div class="col-md-8">
                    <p class=" h1 fw-bold mb-2 mx-1 mx-md-4">
                    </p>
                    <div class="alert" role="alert"
                        style="background-color: rgba(255, 47, 47, 0.418);margin-bottom: 2cm;height:7cm">
                        <label class="form-label mt-3"><i class="fas fa-phone "></i> Số điện thoại </label>
                        <input type="number" id="sdt" v-model="password" class="form-control"
                            placeholder="Nhập vào Số điện thoại của bạn" />

                        <label class="form-label mt-3"><i class="fas fa-lock "></i> Mật Khẩu</label>
                        <input type="password" id="password" v-model="password" class="form-control"
                            placeholder="Nhập vào mật khẩu của bạn" />
                    </div>
                </div>
            </div>
            <div class="row text-right" style="margin-bottom: 4cm">
                <div class="col-md-12">
                    <button  id="loginStatus" style="--clr:yellow"><span>Login</span><i></i></button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    {{-- <script>
        new Vue({
                    el: "#adminlogin",
                    data: {
                        loginaction: {
                            password: '',
                        }
                    },
                    methods: {
                        loginStatus() {
                            axios
                                .post('/admin/loginTo', this.loginaction)
                                .then((res) => {
                                    if (res.data.action == 1) {
                                        toastr.success("ngon!");
                                    }
                                    else if (res.data.action == 2)
                                    {
                                        toastr.warning("ngon như cức");
                                    } else {
                                        toastr.error("ngon như cức");
                                    }
                                })
                                .catch((res) => {
                                    var danh_sach_loi = res.response.data.errors;
                                    $.each(danh_sach_loi, function(key, value) {
                                        toastr.error(value[0]);
                                    });
                                });
                       },
                    }
                });
    </script> --}}

    <script>
        $(document).ready(function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#loginStatus").click(function(e) {
                e.preventDefault();
                var password = $("#password").val();
                var sdt = $("#sdt").val();
                var payload = {
                    'password': password,
                    'sdt': sdt,
                };
                $.ajax({
                    url: '/admin/loginTo',
                    data: payload,
                    type: 'post',
                    success: function(res) {
                        if (res.action == 1) {
                            toastr.success("Truy cập thành công!");
                            setTimeout(function() {
                                $(location).attr('href', '/admin/home');;
                            }, 100);
                        } else if (res.action == 2) {
                            toastr.warning("Bạn chưa được cấp phép!");
                        } else {
                            toastr.error("SĐT hoặc Pass không đúng!");
                        }
                    },
                    error: function(res) {
                        var danh_sach_loi = res.responseJSON.errors;
                        $.each(danh_sach_loi, function(key, value) {
                            toastr.error(value[0]);
                        });
                    }
                });
            });
        });
    </script>
@endsection

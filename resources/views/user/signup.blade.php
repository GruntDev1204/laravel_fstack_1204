@extends('home_page.master')
@section('css')
<link rel="stylesheet" href="/new_assets_admin/CSSbyMySELF/buttonModern.css" type="text/css">
@endsection
@section('content')
    <div id="signU">
        <section class="vh-100" style="background-color: #eee;">
            <div class="container ">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            {{-- Nếu đã đăng nhập sẽ hiện ra chi tiết tài khoản, else sẽ hiện ra form đăng kí --}}
                            <div class="card-body p-md-5">
                                {{-- nếu đã đăng nhập user --}}
                                @if (Auth::guard('chap')->check())
                                  @include('user.logged')
                                 {{-- nếu đã đăng nhập loại tài khoản khác là agent --}}
                                @elseif (Auth::guard('agent')->check())
                                  @include('agent.logged')
                                @else
                                @include('user.form')
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script src="/ProjectMarts/Useraccess/signup.js"></script>
@endsection

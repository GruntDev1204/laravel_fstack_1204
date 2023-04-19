@extends('home_page.master')
@section('content')
    <div id="loginA">
        <section class="vh-100" style="background-color: #eee;">
            <div class="container ">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            {{-- Nếu đã đăng nhập sẽ hiện ra chi tiết tài khoản, else sẽ hiện ra form đăng kí --}}
                            <div class="card-body p-md-5">
                                @if (Auth::guard('agent')->check())
                                  @include('agent.logged')
                                @elseif (Auth::guard('chap')->check())
                                  @include('user.logged')
                                @else
                                  @include('agent.form  ')
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
    <script src="/ProjectMarts/Agentaccess/signup.js"></script>
@endsection

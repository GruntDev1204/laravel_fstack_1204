@extends('home_page.master')
@section('content')
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    @if (Auth::guard('agent')->check())
                     @include('agent.viewlogged')
                </div>
            </div>
            @elseif (Auth::guard('chap')->check())
             @include('user.viewlogged')
        @else
            @include('agent.loginform')
        @endif
        </div>
        </div>
        </div>
    </section>
@endsection

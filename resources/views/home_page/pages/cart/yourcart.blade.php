@extends('home_page.master')
@section('title')
    <h3>Đơn Hàng Của Bạn</h3>
@endsection
@section('content')
    <div id="mobie" class="cart-main-area ptb-100 ptb-sm-60">
        @if( Auth::guard('agent')->check())
        <div class="container">
            <div class="row">
                @include('home_page.pages.cart.donhang')
               @include('home_page.pages.cart.createCart')
            </div>
        </div>
        @elseif (Auth::guard('chap')->check())
        <div class="container">
            <div class="row">
                @include('home_page.pages.cart.donhang')
               @include('home_page.pages.cart.createCart')
            </div>
        </div>
        @else
        @include('home_page.ERR')
        @endif
    </div>
@endsection
@section('js')
    <script src="/ProjectMarts/Homee/chaydonhang.js"></script>
@endsection

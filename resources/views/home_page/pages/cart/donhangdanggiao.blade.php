@extends('home_page.master')
@section('content')
<div id="giaohang">
    @if( Auth::guard('chap')->check())
@include('home_page.pages.cart.tablechitietdonhang')
@include('home_page.pages.cart.tabledonhang')
@elseif( Auth::guard('agent')->check())
@include('home_page.pages.cart.tablechitietdonhang')
@include('home_page.pages.cart.tabledonhang')
@else
@include('home_page.ERR')
@endif
</div>
@endsection
@section('js')
<script src="/ProjectMarts/Homee/donhangdanggiao.js"></script>
@endsection

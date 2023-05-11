@extends('home_page.master')
@section('content')
    @if( Auth::guard('chap')->check())
@include('home_page.pages.cart.tablechitietdonhang')
@elseif( Auth::guard('agent')->check())
@include('home_page.pages.cart.tablechitietdonhang')
@else
@include('home_page.ERR')
@endif
@endsection


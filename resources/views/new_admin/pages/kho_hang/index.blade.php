@extends('new_admin.master')
@section('title')
    <h3>Quản Lý Nhập Kho</h3>
@endsection
@if (Auth::guard('admin')->check())
@section('content')
<div id="app" class="row">
    <div class="col-md-4">
       @include('new_admin.pages.kho_hang.formleft')
    </div>
    <div class="col-md-8">
       @include('new_admin.pages.kho_hang.tableright')
    </div>
</div>
@endsection
@else
@include('new_admin.Error')
@endif
@section('js')
<script src="/ProjectMarts/Admin/khohang.js">
</script>
@endsection

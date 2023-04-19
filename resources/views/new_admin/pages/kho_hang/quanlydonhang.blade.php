@extends('new_admin.master')
@section('title')
<h3> Quản Lý Đơn Hàng</h3>
@endsection
@section('content')
<div id="donhangmanager">
@include('new_admin.pages.kho_hang.donhangcanduyet')
</div>
@endsection
@section('js')
<script src="/ProjectMarts/Admin/quanlydonhang.js"></script>
@endsection

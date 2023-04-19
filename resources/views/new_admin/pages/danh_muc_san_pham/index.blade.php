@extends('new_admin.master')
@section('title')
    <h3>Quản Lý Danh Mục</h3>
@endsection
@section('content')
@if (Auth::guard('admin')->check())
<div id="app">
    <div class="row">
        @include('new_admin.pages.danh_muc_san_pham.formadd')

        @include('new_admin.pages.danh_muc_san_pham.table')
    </div>




    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      @include('new_admin.pages.danh_muc_san_pham.modalDelete')
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include('new_admin.pages.danh_muc_san_pham.modalEdit')
    </div>
</div>
@else
@include('new_admin.Error')
@endif
@endsection
@section('js')
{{-- <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('.lfm').filemanager('image');
</script> --}}
<script src="/ProjectMarts/Admin/quanlydanhmuc.js"></script>
@endsection

@extends('new_admin.master')
@section('title')
    <h3>Quản Lý Sản Phẩm</h3>
@endsection
@section('content')
@if (Auth::guard('admin')->check())
<div id="app">
    @include('new_admin.pages.san_pham.modalXoa')
    @include('new_admin.pages.san_pham.modalUpdate')
    <div class="row">
      @include('new_admin.pages.san_pham.formadd')
    </div>
    <div class="row">
        <div class="col-12">
           @include('new_admin.pages.san_pham.table')
        </div>
    </div>
</div>
@else
@include('new_admin.Error')
@endif
@endsection
@section('js')
<script src="/ProjectMarts/Admin/quanlysanpham.js"></script>
{{-- <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('.lfm').filemanager('image');
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('mo_ta_chi_tiet', options);
    CKEDITOR.replace('mo_ta_chi_tiet_edit', options);
</script> --}}
@endsection

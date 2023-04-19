@extends('new_admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5" style="height: auto">
            <div class="card-header">
                <h4 class="card-title text-center" id="basic-layout-colored-form-control"> <i class="fa-solid fa-gear"></i> Cấu Hình Trang Chủ</h4>
            </div>
          @include('new_admin.pages.config.config')
        </div>
    </div>
</div>

@endsection
@section('js')
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('.lfm').filemanager('image');
</script>
@endsection

@extends('new_admin.master')
@section('css')
<link rel="stylesheet" type="text/css" href="/new_assets_admin/CSSbyMYSELF/buttonCircle.css">
<link rel="stylesheet" type="text/css" href="/new_assets_admin/CSSbyMySELF/buttonModern.css">
@endsection
@section('content')
<div id="admin">
<section class="vh-100" style="background-color: #eee;margin-bottom : 7cm">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
            <div class="card text-danger" style="background-color: black; ">
                <div class="card-body" style="height: background-color;width:background-color ;">
                    @include('createAdmin.form')
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
@section('js')
<script src="/ProjectMarts/Admin/create.js"></script>
@endsection

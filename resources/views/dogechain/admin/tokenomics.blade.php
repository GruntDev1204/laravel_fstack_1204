@extends('dogechain.admin.indexAdmin')
@section('indexSetting')
    @if (Auth::guard('AdminSndg')->check())
        <div class="content-wrapper" id="editAdmin">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> Form information </h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="card" style="height: auto;">
                                    <div class="card-header">
                                        <h3 class="card-title" style="color:yellow;">Tokenomics</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="container">

                                            <div class="alert alert-dark">
                                                <template v-for="(value, key) in loadtokenomics">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <img v-bind:src="value.img" alt="" class="img-fluid"
                                                                style="border-radius: 20px">
                                                        </div>
                                                        <div class="col-md-6">
                                                                <div class="alert alert-light" style="border-radius: 20px">
                                                                    <b> Writer : @{{ value.writer }}</b>
                                                                    <h2 class="mt-5"><b> @{{ value.content }}</b></h2>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                    <template v-for="(value, key) in loadtokenomics">
                                        <div class="card-footer text-right">
                                            <button class="btn btn-info" data-toggle="modal"
                                                data-target="#updatedTokenomics" v-on:click="editToken(value.id)"><i
                                                    class="fa-solid fa-pen-to-square"></i></button>
                                        </div>
                                    </template>
                                </div>
                            </div>
            </section>
        @include('dogechain.admin.editFormTokenomics')
        </div>
    @endif
@endsection

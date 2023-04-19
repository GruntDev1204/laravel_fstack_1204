@extends('dogechain.admin.indexAdmin')
@section('indexSetting')
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
                    <!-- /.row  introduce-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="height: auto;">
                                <div class="card-header">
                                    <h3 class="card-title" style="color:yellow;">Truy cập quyền Admin SNDG</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col  ">
                                            <div class="chart">
                                                <div class="alert alert"
                                                    style="background-color:#252525  ; border-radius: 20px;padding:  40px;">
                                                    <div class="container">
                                                        <div class="row">
                                                            <label><i class="fa-solid fa-phone"></i> PHONE NUMBER </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="điền số điện thoại của bạn"
                                                                v-model="arrayLogin.sdt">
                                                        </div>
                                                        <div class="row mt-5">
                                                            <label><i class="fa-solid fa-key"></i> PASSWORD </label>
                                                            <input type="password"
                                                                class="form-control " v-model="arrayLogin.password
                                                        "  v-on:keyup.enter="loginAdmin()" >
                                                        </div>
                                                        <div class="row mt-5">
                                                            <button class="btn btn-success" v-on:click="loginAdmin()"><i class="fa-solid fa-right-to-bracket"></i> Login
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="/loginForm.jpg"
                                                class="img-fluid" alt="" style="border-radius: 10%">
                                        </div>
                                    </div>
                                </div>
                                <!-- ./card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
            </section>
    </div>
@endsection

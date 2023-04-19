@extends('dogechain.admin.indexAdmin')
@section('indexSetting')
            <div class="content-wrapper"  id="editAdmin">
                <div class="content-header">
                    <div class="container-fluid">

                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <!-- /.row  introduce-->
                        <div class="row">
                            <div class="col-md-12">
                                <template v-for="(value,key) in loadAdmins">
                                    <div class="card" style="height: auto;">
                                        <div class="card-header">
                                            <h3 class="card-title" style="color:yellow;"><i class="fa-solid fa-toolbox"></i>  Admins'Info ID :  #@{{key+1}}</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="container">
                                                    <div class="chart">
                                                        <div class="alert alert" style="background-color: rgba(2, 54, 24, 0.329);border-radius:20px">
                                                            <h1 style="margin-bottom: 30px"><i class="fa-solid fa-circle-info"></i> Info Admin</h1>
                                                            <p><i class="fa-solid fa-user"></i> Admins : <b> @{{ value.ho_va_ten }}</b></p>
                                                            <p><i class="fa-solid fa-phone"></i> PhoneNumber : <b> @{{ value.sdt }}</b></p>
                                                            <p><i class="fa-solid fa-hashtag"></i> Notes :<b> @{{ value.ghi_chu }}</b></p>
                                                            <p><b><i class="fa-sharp fa-solid fa-check"></i> Được phép hoạt động : </b> <button class="btn btn-success"
                                                                    v-on:click="changeAllow(value.id)"
                                                                    v-if="value.is_allow"><i
                                                                        class="fa-solid fa-unlock"></i></button>
                                                                <button class="btn btn-danger"
                                                                    v-on:click="changeAllow(value.id)" v-else><i
                                                                        class="fa-solid fa-lock"></i></button>
                                                            </p>
                                                            <p><b><i class="fa-solid fa-wrench"></i> Quyền điều hành?</b>  <button class="btn btn-success"
                                                                    v-on:click="isOwn(value.id)" v-if="value.is_own">Owner
                                                                    <i class="fa-solid fa-house-user"></i></button>
                                                                <button class="btn btn-danger" v-on:click="isOwn(value.id)"
                                                                    v-else>Not Owner <i
                                                                        class="fa-solid fa-user-lock"></i></button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ./card-body -->
                                        <div class="card-footer text-right ">
                                            <button class="btn btn-danger" v-on:click="DeletedAdmin(value.id)"><i
                                                    class="fa-regular fa-circle-xmark"></i></button>
                                            <button class="btn btn-info" data-toggle="modal" data-target="#updateAdmin"
                                                v-on:click="editAdmin(value.id)"><i
                                                    class="fa-solid fa-user-pen"></i></button>
                                        </div>
                                    </div>
                                </template>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>


                </section>
                @include('dogechain.admin.editAdminForm')
            </div>
@endsection

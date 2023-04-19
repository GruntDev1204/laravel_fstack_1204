@extends('dogechain.admin.indexAdmin')

@section('indexSetting')
@if (Auth::guard('AdminSndg')->check())

    <div class="content-wrapper">
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
                                <h3 class="card-title" style="color:yellow;">ADD MEMBERS</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="alert" style="background-color:rgb(0, 0, 0)">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fullname">full name</label>
                                                <input type="text" class="form-control" v-model="addMember.fullname"
                                                    placeholder="Điền đầy đủ họ và tên">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label>Member's Avatar?</label>
                                                <select  v-model="addMember.sex" id="is_open" class="custom-select block">
                                                    <option value=1>Male</option>
                                                    <option value=0>Female</option>
                                                    <option value=3>Male 3</option>
                                                    <option value=2>Male 2</option>
                                                </select>
                                            </fieldset>

                                        </div>
                                    </div>
                                    <div class="row mt-5 ">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img style="border-radius:50%" src="/avatarMale.png" alt="User Image">
                                            <div class="row">
                                                <label> Avatar Value : Male </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img style="border-radius:50%" src="/avatarMale2.png" alt="User Image">
                                            <div class="row">
                                                <label> Avatar Value : Male 2 </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img style="border-radius:50%" src="/avatarMale3.png" alt="User Image">
                                            <div class="row">
                                                <label> Avatar Value : Male 3 </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img style="border-radius:50%" src="/avatarFemale.png" alt="User Image">
                                            <div class="row">
                                                <label> Avatar Value : Female </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="desJob">Job Descrion</label>
                                                <textarea cols="30" rows="5" type="text" class="form-control" id="desJob" v-model="addMember.desJob"
                                                    placeholder="Điền đầy đủ công việc mô tả"> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./card-body -->
                            <div class="card-footer text-right">
                                <button class="btn btn-warning" v-on:click="resetFormMem()"><i class="fa-solid fa-rotate-right"></i> Reset </button>
                                <button class="btn btn-info" v-on:click="addThanhvien()"><i class="fa-solid fa-plus"></i> ADD A MEMBER </button>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title" style="color:yellow;">Members</h3>
                            </div>
                            <div class="card-body p-0">
                                <ul class="users-list clearfix">
                                    <template v-for="(value, key) in loadMember">
                                        <li>
                                            <div class="row mb-2">
                                                <div class="container">
                                                    <button class="btn btn-success" v-on:click="editThanhVien(value.id)"  data-toggle="modal" data-target="#updateInfoMembers"><i class="fa-solid fa-user-pen"></i></button>
                                                    <button class="btn btn-danger" v-on:click="xoaThanhvien(value.id)"><i class="fa-solid fa-trash"></i></button>
                                                </div>
                                            </div>
                                            <template v-if="value.sex == 1">
                                                <img src="/avatarMale.png" alt="User Image"> <b
                                                class="users-list-name mt-2">@{{value.fullname}}</b> <span class="users-list-date">@{{value.desJob}}</span>
                                            </template>
                                            <template v-else-if="value.sex == 2">
                                                <img src="/avatarMale2.png" alt="User Image"> <b
                                                class="users-list-name mt-2">@{{value.fullname}}</b> <span class="users-list-date">@{{value.desJob}}</span>
                                            </template>
                                            <template v-else-if="value.sex == 3">
                                                <img src="/avatarMale3.png" alt="User Image"> <b
                                                class="users-list-name mt-2">@{{value.fullname}}</b> <span class="users-list-date">@{{value.desJob}}</span>
                                            </template>
                                            <template v-else >
                                                <img src="/avatarFemale.png" alt="User Image"> <b
                                                class="users-list-name mt-2">@{{value.fullname}}</b> <span class="users-list-date">@{{value.desJob}}</span>
                                            </template>
                                        </li>
                                   </template>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

        </section>
        @include('dogechain.admin.memberEdit')
    </div>
@else
@include('dogechain.admin.errors')
@endif
@endsection

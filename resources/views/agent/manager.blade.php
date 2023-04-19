@extends('new_admin.master')
@section('title')
    <h4> Quản Lý Agent </h4>
@endsection
 @if(Auth::guard('admin')->check())
@section('content')
    <div id="sida">
        <section class="vh-100" style="background-color: #eee;">
            <div class="alert alert-success">
                <div class="card card-fluid">
                    <div class="card-header text-center">
                        <h4 class="card-title ">Danh Sách Duyệt Agent</h4>
                    </div>
                    <div class="card-content collapse show">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap text-center col-md-1">#</th>
                                        <th class="text-nowrap text-center  "> Họ và lót </th>
                                        <th class="text-nowrap text-center  ">Tên ngoài</th>
                                        <th class="text-nowrap text-center  ">Họ và Tên</th>
                                        <th class="text-nowrap text-center col-md-5">Email</th>
                                        <th class="text-nowrap text-center "> Số điện thoại</th>
                                        <th class="text-nowrap text-center ">Locked</th>
                                        <th class="text-nowrap text-center "> Khai trừ Agent? </th>
                                    </tr>
                                </thead>
                               <tbody>
                                    <template v-for="(value, key) in agentDaTa ">
                                        <tr>
                                            <th class="text-nowrap text-center">@{{ key + 1 }}</th>
                                            <td>@{{ value.ho_lot }}</td>
                                            <td>@{{ value.ten }}</td>
                                            <td>@{{ value.ho_va_ten }}</td>
                                            <td>@{{ value.email }}</td>
                                            <td>@{{ value.so_dien_thoai }}</td>

                                            <td class="text-center">
                                                <template v-if="value.is_block">
                                                    <button v-on:click="changeBlockstatus(value.id)" class="btn btn-danger">
                                                        <i class="fa-solid fa-lock"></i>
                                                    </button>
                                                </template>
                                                <template v-else>
                                                    <button v-on:click="changeBlockstatus(value.id)"
                                                        class="btn btn-success"><i class="fa-solid fa-check"></i></button>
                                                </template>
                                            </td>
                                            <td class=text-center> <a class="btn text-danger"
                                                    v-on:click="khaitru(value.id)"> <i
                                                        class="fa-solid fa-trash-can"></i> </a> </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </section>


    </div>
@endsection
@else
@include('new_admin.notallow')
@endif
@section('js')
    <script src="ProjectMarts/Admin/quanlyAgent.js"></script>
@endsection

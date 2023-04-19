@extends('new_admin.master')
@section('content')
    @if (Auth::guard('admin')->check())
        @if (Auth::guard('admin')->user()->is_own == 1)
            <div id="admin">
                <section class="vh-100" style="background-color: #eee;">
                    <div class="alert alert-success">
                        <div class="card card-fluid">
                            <div class="card-header text-center">
                                <h4 class="card-title ">Danh Sách Duyệt</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0" id="tableSanPham">
                                        <thead>
                                            <tr>
                                                <th class="text-nowrap text-center col-md-1">#</th>
                                                <th class="text-nowrap text-center  "> Họ và lót </th>
                                                <th class="text-nowrap text-center  ">Tên ngoài</th>
                                                <th class="text-nowrap text-center  ">Họ và Tên</th>
                                                <th class="text-nowrap text-center col-md-5">Ghi Chú</th>
                                                <th class="text-nowrap text-center ">Allowed </th>
                                                <th class="text-nowrap text-center ">Locked</th>
                                                <th class="text-nowrap text-center "> Owner </th>
                                                <th class="text-nowrap text-center "> Khai trừ Admin? </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <template v-for="(value, key) in Dataadmin ">
                                                <tr>
                                                    <th class="text-nowrap text-center">@{{ key + 1 }}</th>
                                                    <td>@{{ value.ho_lot }}</td>
                                                    <td>@{{ value.ten }}</td>
                                                    <td>@{{ value.ho_va_ten }}</td>
                                                    <td>@{{ value.ghi_chu }}</td>
                                                    <td class="text-center">
                                                        <template v-if="value.is_allow">
                                                            <button v-on:click="changeAllow(value.id)"
                                                                class="btn btn-success"> <i class="fa-solid fa-check"></i>
                                                            </button>
                                                        </template>
                                                        <template v-else>
                                                            <button v-on:click="changeAllow(value.id)"
                                                                class="btn btn-danger"><i
                                                                    class="fa-solid fa-lock"></i></button>
                                                        </template>
                                                    </td>
                                                    <td class="text-center">
                                                        <template v-if="value.is_block">
                                                            <button v-on:click="Blocked(value.id)" class="btn btn-danger">
                                                                <i class="fa-solid fa-ban"></i> </button>
                                                        </template>
                                                        <template v-else>
                                                            <button v-on:click="Blocked(value.id)" class="btn btn-success">
                                                                <i class="fa-solid fa-shield"></i> </button>
                                                        </template>
                                                    </td>
                                                    <td class=text-center> <button class="btn btn-info "> <i
                                                                class="fa-solid fa-house-user"></i> @{{ value.is_own == 1 ? "Chủ sỡ hữu" : "Admin phụ" }}
                                                        </button></td>
                                                    <td class=text-center> <a class="btn text-danger"
                                                            v-on:click="deleteAdmin(value.id)"> <i
                                                                class="fa-solid fa-trash-can"></i> </a> </td>

                                                    {{-- @{{ value.is_open == 1 ? "Hiển Thị" : "" }}
                                    </td>
                                    <td>@{{ value.ten_danh_muc }}</td>
                                    <td>
                                        <button v-on:click="edit(value.id)" class="btn btn-info" data-toggle="modal" data-target="#updateModal" >Edit</button>
                                        <button v-on:click="gandeleteid(value.id)" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
                                    </td>
                                    </tr> --}}
                                            </template>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        @else
            @include('new_admin.notallow')
        @endif
    @endif
@endsection
@section('js')
    <script>
        new Vue({
            el: '#admin',
            data: {
                Dataadmin: [],
            },
            created() {
                this.dataShowra();
            },
            methods: {
                dataShowra() {
                    axios
                        .get('/ceo/data', this.newadmin)
                        .then((res) => {
                            this.Dataadmin = res.data.adminSIDA;
                        })

                },
                changeAllow(id) {
                    axios
                        .get('/ceo/kich-hoat/' + id)
                        .then((res) => {
                            if (res.data.status) {
                                this.dataShowra();
                                toastr.info("đã kích hoạt quyền admin!");
                            }
                        });
                },
                Blocked(id) {
                    axios
                        .get('/ceo/block/' + id)
                        .then((res) => {
                            if (res.data.status) {
                                this.dataShowra();
                            }
                        });
                },
                deleteAdmin(id) {
                    axios
                        .get('/ceo/khai-tru/' + id)
                        .then((res) => {
                            if (res.data.admin) {
                                this.dataShowra();
                                toastr.info("bay màu!");
                            } else {
                                toastr.error("Không tìm thấy admin!");
                            }
                        });
                },

            }

        })
    </script>
@endsection

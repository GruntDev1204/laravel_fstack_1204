@extends('home_page.master')
@section('content')
    <div class="container" id="awp">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    {{-- Nếu đã đăng nhập sẽ hiện ra chi tiết tài khoản, else sẽ hiện ra form đăng kí --}}
                    <div class="card-body p-md-5">
                        @if (Auth::guard('agent')->check())
                            <form>
                                <div class="card text-black" style="background-image: url('/fuck.png');">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <p class=" h1 fw-bold mb-2 mx-1 mx-md-4 text-center ">
                                                    <b>
                                                        <h4 style="color: rgb(0, 255, 200);"> <i
                                                                class="fas fa-pen-to-square" style="margin-left : 3cm "></i>
                                                           Chỉnh Sửa Thông Tin (Agent) </h4>
                                                </p></b>
                                                <div class="alert mt-5 text-light"
                                                    style="background-color: rgba(114, 20, 133, 0.658)">

                                                    <input v-model="dataAgent.id" type="number" class="form-control" >
                                                    <label class="form-label"><i
                                                            class="fas fa-light fa-file-signature"></i>
                                                        Họ và
                                                        tên</label>
                                                    <input type="text" v-model="dataAgent.ho_va_ten" class="form-control"
                                                        placeholder="Nhập vào Tên của bạn" />

                                                    <label class="form-label mt-3"><i class="fas fa-light fa-phone"></i>
                                                        Số điện thoại </label>
                                                    <input type="text" v-model="dataAgent.so_dien_thoai" class="form-control"
                                                        placeholder="Nhập vào số điện thoại của bạn" />

                                                    <label class="form-label mt-3"><i class="fas fa-envelope "></i>
                                                        Email</label>
                                                    <input type="email"v-model="dataAgent.email" class="form-control"
                                                        placeholder="Nhập vào Email của bạn" />

                                                    <label class="form-label mt-3"><i class="fas fa-lock "></i>
                                                        Mật
                                                        khẩu</label>
                                                    <input type="password" v-model="dataAgent.password" class="form-control"
                                                        placeholder="Nhập vào mật khẩu của bạn" />

                                                    <label class="form-label mt-3"><i class="fas fa-key"></i>
                                                        Nhắc
                                                        lại mật khẩu</label>
                                                    <input type="password" v-model="dataAgent.re_password" class="form-control"
                                                        placeholder="Nhập lại mật khẩu của bạn" />

                                                    <label class="form-label mt-3"><i
                                                            class="fa-solid fa-location-dot"></i>
                                                        Địa
                                                        chỉ </label>
                                                    <input type="text" v-model="dataAgent.dia_chi" class="form-control"
                                                        placeholder="Nhập vào địa chỉ của bạn" />
                                                </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                        <div class="row text-right" style="margin-top: 1cm">
                                            <div class="col-md-12 ">
                                                {{-- <button class="btn btn-info" type="button"  v-on:click="edit(value.id)">
                                                    <i class="fa fa-user-plus"></i> Edit </button> --}}

                                                <button class="btn btn-info" type="button"  v-on:click="updateA()">
                                                    <i class="fa fa-user-plus"></i> Xác Nhận </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row mt-2">
                                <div class="col">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0" id="tableSanPham">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap text-center">Họ Và Tên</th>
                                                    <th class="text-nowrap text-center">địa chỉ</th>
                                                    <th class="text-nowrap text-center">tự xử</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <template v-for="(value, key) in loadDataA">
                                                    <tr>
                                                        <td>@{{ value.ho_va_ten }}</td>
                                                        <td>@{{ value.dia_chi }}</td>
                                                        <td>
                                                            <button v-on:click="edit(value.id)" class="btn btn-success">Edit</button>
                                                        </td>
                                                    </tr>
                                                </template>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    new Vue({
        el  :   '#awp',
        data :{
            loadDataA : [],
            dataAgent   :   {
                id              :   0,
                ho_va_ten    :   '',
                so_dien_thoai   :   '',
                email         :   '',
                password  :   '',
                re_password : '',
                dia_chi    :   '',
                thanh_pho      :   '',
                },
            },
        created() {
            this.data();
        },
        methods:{
            data(){
                axios
                    .get('/agent/loadA')
                    .then((res) => {
                        this.loadDataA = res.data.dataAgent;
                    });
            },
            edit(id) {
                axios
                    .get('/agent/idAgent/' + id)
                    .then((res) => {
                        if(res.data.status) {
                            this.dataAgent = res.data.Agent;
                        }
                    });
            },
            updateA(){
                axios
                    .post('/agent/Update/', this.dataAgent)
                    .then((res) => {
                        toastr.info("Đã cập nhật thông tin (Agent) !!!");
                        this.data();
                    })
                    .catch((res) => {
                        var danh_sach_loi = res.response.data.errors;
                        $.each(danh_sach_loi, function(key, value){
                            toastr.error(value[0]);
                        });
                    });
            },
        }
    })
</script>
@endsection

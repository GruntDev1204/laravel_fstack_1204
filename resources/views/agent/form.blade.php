<div class="card text-black" style="background-image: url('/fuck.png');">
    <div class="card-body ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p class=" h1 fw-bold mb-2 mx-1 mx-md-4 text-center ">
                    <b>
                        <h4 style="color: rgb(0, 255, 200);"> <i
                                class="fas fa-user-plus"
                                style="margin-left : 4cm "></i>
                            Đăng
                            Kí Tài Khoản Agent Mới</h4>
                </p></b>
                <div class="alert mt-5 text-light"
                    style="background-color: rgba(114, 20, 133, 0.658)">
                    <label class="form-label"><i
                            class="fas fa-light fa-file-signature"></i>
                        Họ và
                        tên</label>
                    <input type="text" v-model="newagent.ho_va_ten" class="form-control"
                        placeholder="Nhập vào Tên của bạn" />

                    <label class="form-label mt-3"><i
                            class="fas fa-light fa-phone"></i>
                        Số điện thoại </label>
                    <input type="text" v-model="newagent.so_dien_thoai" class="form-control"
                        placeholder="Nhập vào số điện thoại của bạn" />

                    <label class="form-label mt-3"><i class="fas fa-envelope "></i>
                        Email</label>
                    <input type="email" v-model="newagent.email" class="form-control"
                        placeholder="Nhập vào Email của bạn" />

                    <label class="form-label mt-3"><i class="fas fa-lock "></i>
                        Mật
                        khẩu</label>
                    <input type="password" v-model="newagent.password" class="form-control"
                        placeholder="Nhập vào mật khẩu của bạn" />

                    <label class="form-label mt-3"><i class="fas fa-key"></i>
                        Nhắc
                        lại mật khẩu</label>
                    <input type="password" v-model="newagent.re_password" class="form-control"
                        placeholder="Nhập lại mật khẩu của bạn" />

                    <label class="form-label mt-3"><i
                            class="fa-solid fa-location-dot"></i>
                        Địa
                        chỉ </label>
                    <input type="text" v-model="newagent.dia_chi" class="form-control"
                        placeholder="Nhập vào địa chỉ của bạn" />

                    <p class="mt-3"><input class="form-check-input ml-1"
                            id="agree"  v-model="newagent.agree" type="checkbox" /><label
                            class="form-check-label text-light"
                            style="font-size: 17px">
                            Tôi đồng ý với <a style="color: greenyellow"><i
                                    class="fa-solid fa-shield"></i><b>
                                    Điều Khoản
                                </b> </a> .
                        </label></p>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row text-right" style="margin-top: 1cm">
            <div class="col-md-12 ">
                <button class="btn btn-info" type="button" v-on:click="signupAgent()">
                    <i class="fa fa-user-plus"></i> Đăng Kí</button>
                <a href="/agent/login" type="button" class="btn btn-success"
                    style="margin-left:10px"><i class="fas fa-user"></i> Đăng
                    Nhập</a>
            </div>
        </div>
    </div>
</div>

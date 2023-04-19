<div class="card text-black" style="background-image: url('/fuck.png');">
    <div class="card-body ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p class=" h1 fw-bold mb-2 mx-1 mx-md-4 text-center ">
                    <b>
                        <h4 style="color: rgb(238, 255, 0);"> <i
                                class="fas fa-user-plus" style="margin-left : 4cm "></i>
                            Đăng
                            Kí Tài Khoản User Mới</h4>
                </p></b>
                <div class="alert mt-5 text-light"
                    style="background-color: rgba(114, 20, 133, 0.658)">
                    <label class="form-label"><i
                            class="fas fa-light fa-file-signature"></i>
                        Họ và
                        tên</label>
                    <input type="text" v-model="newuser.ho_va_ten" class="form-control"
                        placeholder="Nhập vào Tên của bạn" />

                    <label class="form-label mt-3"><i class="fas fa-light fa-phone"></i>
                        Số điện thoại </label>
                    <input type="text" v-model="newuser.so_dien_thoai" class="form-control"
                        placeholder="Nhập vào số điện thoại của bạn" />

                    <label class="form-label mt-3"><i class="fas fa-envelope "></i>
                        Email</label>
                    <input type="email" v-model="newuser.email" class="form-control"
                        placeholder="Nhập vào Email của bạn" />

                    <label class="form-label mt-3"><i class="fas fa-lock "></i>
                        Mật
                        khẩu</label>
                    <input type="password" v-model="newuser.password" class="form-control"
                        placeholder="Nhập vào mật khẩu của bạn" />

                    <label class="form-label mt-3"><i class="fas fa-key"></i>
                        Nhắc
                        lại mật khẩu</label>
                    <input type="password" v-model="newuser.re_password" class="form-control"
                        placeholder="Nhập lại mật khẩu của bạn" />

                    <label class="form-label mt-3"><i
                            class="fa-solid fa-location-dot"></i>
                        Địa
                        chỉ </label>
                    <input type="text" v-model="newuser.dia_chi" class="form-control"
                        placeholder="Nhập vào địa chỉ của bạn" />

                    <p class="mt-3"><input class="form-check-input ml-1"
                            v-model="newuser.agree" type="checkbox" /><label
                            class="form-check-label text-light" style="font-size: 17px">
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
                <button type="submit" v-on:click="signupCus()" style="--clr:yellow" ><span>Đăng Kí</span><i></i></button>
            </div>
        </div>
    </div>
</div>

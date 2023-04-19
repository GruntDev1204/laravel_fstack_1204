<div class="card text-black" style="background-image: url('/loginview2.jpg');margin-bottom: 11cm">
    <div class="card-body" style="height: 500px;">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="alert" style="background-color: rgba(25, 65, 55, 0.685);"
                        role="alert">
                        <p style="font-size: 20px;color:rgb(29, 230, 39)">
                            <marquee> <b> Bạn đã đang đăng nhập thành công vào tài khoản <b
                                        style="color: orangered"><i class="fa-solid fa-user-check"></i>
                                        {{ Auth::guard('agent')->user()->ho_va_ten }}</b> !!! Loại Tài Khoản : Agent </b>
                            </marquee>
                        </p>
                        <div class="row" style="margin-top: 50px">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <p style="font-size: 17px"> <i class="fa-solid fa-address-card"></i>
                                    ID user :
                                    <b>{{ Auth::guard('agent')->user()->id }}{{ Auth::guard('agent')->user()->hash }}</b>
                                </p>
                                <p style="font-size: 17px"> <i class="fa-solid fa-envelope"></i>
                                    Email : <b>{{ Auth::guard('agent')->user()->email }}</b>
                                </p>
                                <p style="font-size: 17px"><i class="fa-solid fa-phone"></i> Số điện
                                    thoại :
                                    <b>{{ Auth::guard('agent')->user()->so_dien_thoai }}</b>
                                </p>
                                <p style="font-size: 17px"> <i class="fa-solid fa-location-dot"></i>
                                    Địa chỉ :
                                    <b>{{ Auth::guard('agent')->user()->dia_chi }}</b>
                                </p>
                                <p style="font-size: 17px"> <i class="fa-solid fa-city"></i> Thành
                                    Phố :
                                    <b>{{ Auth::guard('agent')->user()->thanh_pho }}</b>
                                </p>
                                <p style="font-size: 17px"> <i class="fa-solid fa-clock"></i> Thời
                                    gian lập :
                                    <b>{{ Auth::guard('agent')->user()->created_at }}</b>
                                </p>
                                <p style="font-size: 17px"> <i class="fa-solid fa-shield"></i> Tình
                                    trạng tài khoản :
                                    @if (Auth::guard('agent')->user()->is_email == 1)
                                        <b style="color: rgb(106, 240, 16)">Đã Được Xác Minh <i
                                                class="fa-solid fa-circle-check"></i></b>
                                    @else
                                        <b style="color: rgb(255, 197, 6)">Chưa Được Xác Minh <i
                                                class="fa-solid fa-triangle-exclamation"></i></b>
                                    @endif
                                </p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="row text-right" style="margin-top: 30px">
                            <div class="col">
                                <a href="/client" class="btn btn-success"><i
                                        class="fa-solid fa-house"></i> Trở về trang chủ</a>

                                <a href="/agent/logout" class="btn btn-primary"><i class="fa-solid fa-user-clock"></i>
                                     Sử dụng tài khoản khác </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

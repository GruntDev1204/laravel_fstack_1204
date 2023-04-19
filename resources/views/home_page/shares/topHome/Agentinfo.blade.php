<li><a href="/cart"><i class="lnr lnr-cart"></i><span class="my-cart"><span
                class="total-pro">2</span><span>Your Cart</span></span></a>
    <ul class="ht-dropdown cart-box-width" id="cartTop">
        <li>
            <div class="cart-footer">
                <div class="cart-actions text-center">
                    <a class="cart-checkout" href="/dat-hang">xem</a>
                </div>
            </div>
            <!-- Cart Footer Inner End -->
        </li>
    </ul>
</li>
<div class="dropdown ml-4">
    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"><i
            class="fas fa-circle-user"></i>
        {{ Auth::guard('agent')->user()->ho_va_ten }}
        <span class="caret"></span></button>
    <ul class="dropdown-menu mt-2">
        <li> <a type="button" class="btn" data-toggle="modal" data-target="#userInfo">
                <i class="fa-solid fa-circle-info"></i> Chi tiết tài khoản (Agent)
            </a>
        </li>
    </ul>
</div>
<div class="modal fade" id="userInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-image: url('/modal.jpg')">
            <div class="modal-body">
                <p>
                <h5 class="modal-title ml-5">Thông tin tài khoản :
                    @if (Auth::guard('agent')->user()->is_email == 1)
                        <b style="color: rgb(106, 240, 16)"> <i class="fa-solid fa-user-shield"></i>
                            {{ Auth::guard('agent')->user()->ho_va_ten }}
                        </b>
                    @else
                        <b style="color: rgb(255, 197, 6)"> <i class="fas fa-triangle-exclamation"></i>
                            {{ Auth::guard('agent')->user()->ho_va_ten }}
                        </b>
                    @endif
                </h5>
                </p>

                <div class="container ">
                    <div class="alert" style="background-color: rgba(19, 163, 182, 0.699);" role="alert">
                        <p style="font-size: 17px"> <i class="fa-solid fa-address-card"></i> ID agent :
                            <b>{{ Auth::guard('agent')->user()->id }}{{ Auth::guard('agent')->user()->hash }}</b>
                        </p>
                        <p style="font-size: 17px"> <i class="fa-solid fa-envelope"></i>
                            Email : <b>{{ Auth::guard('agent')->user()->email }}</b>
                        </p>
                        <p style="font-size: 17px"><i class="fa-solid fa-phone"></i> Số
                            điện thoại :
                            <b>{{ Auth::guard('agent')->user()->so_dien_thoai }}</b>
                        </p>
                        <p style="font-size: 17px"> <i class="fa-solid fa-location-dot"></i> Địa chỉ :
                            <b>{{ Auth::guard('agent')->user()->dia_chi }}</b>
                        </p>
                        <p style="font-size: 17px"> <i class="fa-solid fa-city"></i>
                            Thành Phố :
                            <b>{{ Auth::guard('agent')->user()->thanh_pho }}</b>
                        </p>
                        <p style="font-size: 17px"> <i class="fa-solid fa-clock"></i>
                            Thời gian lập :
                            <b>{{ Auth::guard('agent')->user()->created_at }}</b>
                        </p>
                        <p style="font-size: 17px"> <i class="fa-solid fa-shield"></i>
                            Tình trạng tài khoản :
                            @if (Auth::guard('agent')->user()->is_email == 1)
                                <b style="color: rgb(106, 240, 16)">Đã Được Xác Minh <i
                                        class="fa-solid fa-circle-check"></i></b>
                            @else
                                <b style="color: rgb(255, 197, 6)">Chưa Được Xác Minh <i
                                        class="fa-solid fa-triangle-exclamation"></i></b>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-right">
                <div class="row">
                    <div class="col">
                        <a href="/agent/editInfo/" class=" btn btn-success ml-2">
                            <i class="fa-solid fa-user-pen"></i> Edit Info
                        </a>

                        <button type="button" class=" btn btn-danger" data-dismiss="modal">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<li class="mr-2">
    <a href="/agent/logout" type="button" class="btn btn-danger ">
        <span class="fa-solid fa-right-from-bracket fa-sm"></span> Đăng Xuất
    </a>
</li>

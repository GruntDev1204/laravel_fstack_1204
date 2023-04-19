@if (Auth::guard('agent')->check())
<ul>
    <li>
        <div class="alert alert-success">
            <marquee>
                <h4> Welcome
                    to <b style="color: orange"> Trung's Mart </b> Website!!! Have a good day Agent <b
                        style="color: rgb(255, 238, 0)"><i class="fa-solid fa-circle-user"></i>
                        {{ Auth::guard('agent')->user()->ho_va_ten }}</b> !!!</h4>
            </marquee>
        </div>
    </li>
</ul>
@elseif (Auth::guard('chap')->check())
<ul>
    <li>
        <div class="alert alert-info">
            <marquee>
                <h4> Welcome
                    to <b style="color: orange"> Trung's Mart </b> Website!!! Have a good day User <b
                        style="color: rgb(255, 238, 0)"><i class="fa-solid fa-circle-user"></i>
                        {{ Auth::guard('chap')->user()->ho_va_ten }}</b> !!!</h4>
            </marquee>
        </div>
    </li>
</ul>
@else
<li>
    <div class="row">
        <div class="col">
            <p>
            <div class="dropdown ml-4">
                <a class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"><i
                        class="fas fa-circle-user"></i>
                    Tùy Chọn Truy Cập
                    <span class="caret"></span></a>
                <ul class="dropdown-menu mt-2">
                    <li> <a href="/agent/login" type="button" class="btn">
                            <i class="fa-solid fa-circle-info"></i> Đăng Nhập Agent
                        </a>
                    </li>
                    <li> <a href="/user/login" type="button" class="btn">
                            <i class="fa-solid fa-circle-info"></i> Đăng Nhập User
                        </a>
                    </li>
                    <li> <a href="/agent/register" type="button" class="btn">
                            <i class="fa-solid fa-circle-info"></i> Đăng Kí Agent
                        </a>
                    </li>
                    <li> <a href="/user/signup" type="button" class="btn">
                            <i class="fa-solid fa-circle-info"></i> Đăng Kí User
                        </a>
                    </li>
                </ul>
            </div>
            </p>

        </div>
    </div>
</li>
@endif

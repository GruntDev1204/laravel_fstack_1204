<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <!-- main menu header-->
    <!-- / main menu header-->
    <!-- main menu content-->
    @if (Auth::guard('admin')->check())
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @if(Auth::guard('admin')->user()->is_own == 1)
            <li class=" nav-item"><a href="/ceo/quan-ly-admin">
                <i class="feather icon-home"></i><span class="menu-title" data-i18n="">Đặc Quyền Sỡ Hữu</a>
            </li>
            @else
            <li class=" nav-item"><a href="/admin/not-allow">
                <i class="feather icon-home"></i><span class="menu-title" data-i18n="">Đặc Quyền Sỡ Hữu</a>
            </li>
            @endif
            <li class=" nav-item"><a><i class="feather icon-zap"></i><span class="menu-title">Quản Lý </span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="/admin/danh-muc-san-pham/index" data-i18n="nav.starter_kit.1_column">Quản Lý Danh Mục</a>
                    </li>
                    <li><a class="menu-item" href="/admin/san-pham/index" data-i18n="nav.starter_kit.2_columns">Quản Lý Sản Phẩm</a>
                    </li>
                    <li><a class="menu-item" href="/admin/nhap-kho/index" data-i18n="nav.starter_kit.2_columns">Quản Lý Kho Hàng</a>
                    </li>
                    <li><a class="menu-item" href="/admin/config-client/" data-i18n="nav.starter_kit.2_columns">Cấu Hình Trang Chủ</a>
                    </li>
                    <li><a class="menu-item" href="/admin/quan-ly-don-hang/" data-i18n="nav.starter_kit.2_columns">Đơn Hàng</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a><i class="fa-solid fa-address-book"></i><span class="menu-title">Danh Sách </span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="/agent/manager" data-i18n="nav.starter_kit.1_column">Danh Sách Đại Lý</a>
                    </li>
                    <li><a class="menu-item" href="/user/manager" data-i18n="nav.starter_kit.2_columns">Danh Sách Khách Hàng</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    @else
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="/admin/Error">
                <i class="feather icon-home"></i><span class="menu-title" >Đặc Quyền Sỡ Hữu</a>
            </li>
            <li class=" nav-item"><a><i class="feather icon-zap"></i><span class="menu-title">Quản Lý </span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="/admin/Error" >Quản Lý Danh Mục</a>
                    </li>
                    <li><a class="menu-item" href="/admin/Error" >Quản Lý Sản Phẩm</a>
                    </li>
                    <li><a class="menu-item" href="/admin/Error" >Quản Lý Kho Hàng</a>
                    </li>
                    <li><a class="menu-item" href="/admin/Error">Cấu Hình Trang Chủ</a>
                    </li>
                    <li><a class="menu-item" href="/admin/Error">Đơn Hàng</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a><i class="fa-solid fa-address-book"></i><span class="menu-title">Danh Sách </span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="/admin/Error " data-i18n="nav.starter_kit.1_column">Danh Sách Đại Lý</a>
                    </li>
                    <li><a class="menu-item" href="/admin/Error" data-i18n="nav.starter_kit.2_columns">Danh Sách Khách Hàng</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    @endif




    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- main menu footer-->
</div>


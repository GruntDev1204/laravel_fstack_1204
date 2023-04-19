<!-- Main Header Area Start Here -->
<header>
    <div class="header-top-area">
        <div class="container text-right mt-2">
           @include('home_page.shares.topHome.welcome')
        </div>
    </div>

    <div class="header-middle ptb-15">
        <div class="container">
            <div class="row ">
                <div class=" col-md-4">
                    <div class="logo mb-all-30">
                        <a href="/client"><img src="/assets_homepage/img/logo/logo.png" alt="logo-image"></a>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="cart-box mt-all-30">
                        <ul class="d-flex justify-content-lg-end justify-content-center align-items-center">
                            @if (Auth::guard('agent')->check())
                               @include('home_page.shares.topHome.Agentinfo')
                            @elseif (Auth::guard('chap')->check())
                            @include('home_page.shares.topHome.Userinfo')
                            @else
                                <li class="mr-4"><a href="/cart"><i class="fa-solid fa-cart-shopping"></i><span class="my-cart"><span>Your Cart</span></a>
                                </li>
                                <li class="mr-2">
                                    <p>
                                    <h6><i class="fa-solid fa-user-injured fa-lg"></i> Please Login To An Account!</h6>
                                    </p>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Middle End Here -->
    <!-- Header Bottom Start Here -->
  @include('home_page.shares.topHome.menuChaCon')
</header>

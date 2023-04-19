<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('home_page.shares.header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script>
    @toastr_css
</head>
<body>
    <div class="wrapper">
        <div class="popup_banner">
            <span class="popup_off_banner">×</span>
            <div class="banner_popup_area">
                <img src="/assets_homepage/img/banner/pop-banner.jpg" alt="">
            </div>
        </div>

        @include('home_page.shares.top')
        @yield('content')
        @include('home_page.shares.footer')
        <div class="main-product-thumbnail quick-thumb-content">
            <div class="container">
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-sm-5">
                                        <div class="tab-content">
                                            <div id="thumb1" class="tab-pane fade show active">
                                                <a data-fancybox="images" href="/assets_homepage/img/products/43.jpg"><img src="/assets_homepage/img/products/43.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumb2" class="tab-pane fade">
                                                <a data-fancybox="images" href="/assets_homepage/img/products/43.jpg"><img src="/assets_homepage/img/products/43.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumb3" class="tab-pane fade">
                                                <a data-fancybox="images" href="/assets_homepage/img/products/43.jpg"><img src="/assets_homepage/img/products/43.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumb4" class="tab-pane fade">
                                                <a data-fancybox="images" href="/assets_homepage/img/products/43.jpg"><img src="/assets_homepage/img/products/43.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumb5" class="tab-pane fade">
                                                <a data-fancybox="images" href="/assets_homepage/img/products/43.jpg"><img src="/assets_homepage/img/products/43.jpg" alt="product-view"></a>
                                            </div>
                                        </div>

                                        <div class="product-thumbnail mt-20">
                                            <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                                                <a class="active" data-toggle="tab" href="#thumb1"><img src="/assets_homepage/img/products/43.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumb2"><img src="/assets_homepage/img/products/43.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumb3"><img src="/assets_homepage/img/products/43.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumb4"><img src="/assets_homepage/img/products/43.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumb5"><img src="/assets_homepage/img/products/43.jpg" alt="product-thumbnail"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-6 col-sm-7">
                                        <div class="thubnail-desc fix mt-sm-40">
                                            <h3 class="product-header">Printed Summer Dress</h3>
                                            <div class="pro-price mtb-30">
                                                <p class="d-flex align-items-center"><span class="prev-price">16.51</span><span class="price">$15.19</span><span class="saving-price">save 8%</span></p>
                                            </div>
                                            <p class="mb-20 pro-desc-details">Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                                            <div class="product-size mb-20 clearfix">
                                                <label>Size</label>
                                                <select class="">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="color mb-20">
                                                <label>color</label>
                                                <ul class="color-list">
                                                    <li>
                                                        <a class="orange active" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="paste" href="#"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="box-quantity d-flex">
                                                <form action="#">
                                                    <input class="quantity mr-40" type="number" min="1" value="1">
                                                </form>
                                                <a class="add-cart" href="cart.html">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-footer">
                                <div class="socila-sharing">
                                    <ul class="d-flex">
                                        <li>share</li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('js')
    @include('home_page.shares.bottom')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/ProjectMarts/Homee/loginAction.js"></script>
    <script src="/ProjectMarts/Homee/addtocart.js"></script>

</body>

</html>

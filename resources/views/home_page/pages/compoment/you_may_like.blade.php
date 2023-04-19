<div class="like-product ptb-95 off-white-bg pt-sm-50 pb-sm-55 ">
    <div class="container">
        <div class="like-product-area">
            <h2 class="section-ttitle2 mb-30">You May Like </h2>
            <!-- Arrivals Product Activation Start Here -->
            <div class="like-pro-active owl-carousel">
                <!-- Double Product Start -->
                <div class="double-product">
                    <!-- Single Product Start -->
                    @foreach ($allSanPham as $key_sp => $value_sp)
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="/san-pham/{{$value_sp->slug_san_pham}}-post{{ $value_sp->id }}">
                                    <img class="primary-img" src="{{ $value_sp->anh_dai_dien }}" alt="single-product">
                                    <img class="secondary-img" src="{{ $value_sp->anh_dai_dien }}" alt="single-product">
                                </a>
                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <div class="pro-info">
                                    <h4><a href="/san-pham/{{$value_sp->slug_san_pham}}-post{{ $value_sp->id }}">{{ $value_sp->ten_san_pham }}</a></h4>
                                    p><span class="price">{{ number_format($value_sp->gia_khuyen_mai, 0) }}</span><del class="prev-price">{{ number_format($value_sp->gia_ban, 0) }}</del></p>
                        <div class="label-product l_sale">{{ number_format(($value_sp->gia_ban - $value_sp->gia_khuyen_mai) / $value_sp->gia_ban * 100, 0 )}}<span class="symbol-percent">%</span></div>
                                </div>
                                <div class="pro-actions">
                                    @if (Auth::guard('agent')->check())
                                        <div class="actions-primary">
                                            <a title="Add to Cart" class="addToCart" data-id="{{ $value_sp->id }}"> + Add To Cart</a>
                                        </div>
                                    @else
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart" data-toggle="modal" data-target="#myModal" > + Add To Cart</a>
                                        </div>
                                    @endif
                                    <div class="actions-secondary">
                                        <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                        <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Content End -->
                        </div>
                    @endforeach

                    @foreach ($allSanPham as $key_sp => $value_sp)
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="/san-pham/{{$value_sp->slug_san_pham}}-post{{ $value_sp->id }}">
                                    <img class="primary-img" src="{{ $value_sp->anh_dai_dien }}" alt="single-product">
                                    <img class="secondary-img" src="{{ $value_sp->anh_dai_dien }}" alt="single-product">
                                </a>
                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <div class="pro-info">
                                    <h4><a href="/san-pham/{{$value_sp->slug_san_pham}}-post{{ $value_sp->id }}">{{ $value_sp->ten_san_pham }}</a></h4>
                                    p><span class="price">{{ number_format($value_sp->gia_khuyen_mai, 0) }}</span><del class="prev-price">{{ number_format($value_sp->gia_ban, 0) }}</del></p>
                        <div class="label-product l_sale">{{ number_format(($value_sp->gia_ban - $value_sp->gia_khuyen_mai) / $value_sp->gia_ban * 100, 0 )}}<span class="symbol-percent">%</span></div>
                                </div>
                                <div class="pro-actions">
                                    @if (Auth::guard('agent')->check())
                                        <div class="actions-primary">
                                            <a title="Add to Cart" class="addToCart" data-id="{{ $value_sp->id }}"> + Add To Cart</a>
                                        </div>
                                    @else
                                        <div class="actions-primary">
                                            <a href="cart.html" title="Add to Cart" data-toggle="modal" data-target="#myModal" > + Add To Cart</a>
                                        </div>
                                    @endif
                                    <div class="actions-secondary">
                                        <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                        <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Content End -->
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- Arrivals Product Activation End Here -->
        </div>
        <!-- main-product-tab-area-->
    </div>
    <!-- Container End -->
</div>

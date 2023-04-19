@extends('home_page.master')

@section('content')

<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="/client">Home</a></li>
                <li class="active"><a href="/san-pham/{{$sanPham->id}}">Products : {{$sanPham->ten_san_pham}}</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>

<div class="main-product-thumbnail ptb-100 ptb-sm-60">
    <div class="container">
        <div class="thumb-bg">
            <div class="row">
                <!-- Main Thumbnail Image Start -->
                <div class="col-lg-5 mb-all-40">
                    <!-- Thumbnail Large Image start -->
                    <div class="tab-content">
                        <div id="thumb1" class="tab-pane fade show active">
                            <a data-fancybox="images" href="{{ $sanPham->anh_dai_dien }}"><img src="{{ $sanPham->anh_dai_dien }}" alt="product-view"></a>
                        </div>
                        <div id="thumb2" class="tab-pane fade">
                            <a data-fancybox="images" href="{{ $sanPham->anh_dai_dien }}"><img src="{{ $sanPham->anh_dai_dien }}" alt="product-view"></a>
                        </div>
                        <div id="thumb3" class="tab-pane fade">
                            <a data-fancybox="images" href="{{ $sanPham->anh_dai_dien }}"><img src="{{ $sanPham->anh_dai_dien }}" alt="product-view"></a>
                        </div>
                        <div id="thumb4" class="tab-pane fade">
                            <a data-fancybox="images" href="/assets_homepage/{{ $sanPham->anh_dai_dien }}"><img src="/assets_homepage/{{ $sanPham->anh_dai_dien }}" alt="product-view"></a>
                        </div>
                        <div id="thumb5" class="tab-pane fade">
                            <a data-fancybox="images" href="/assets_homepage/{{ $sanPham->anh_dai_dien }}"><img src="/assets_homepage/{{ $sanPham->anh_dai_dien }}" alt="product-view"></a>
                        </div>
                    </div>
                    <!-- Thumbnail Large Image End -->
                    <!-- Thumbnail Image End -->
                    <div class="product-thumbnail mt-15">
                        <div class="thumb-menu owl-carousel nav tabs-area owl-loaded owl-drag" role="tablist">
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 780px;"><div class="owl-item active" style="width: 140.833px; margin-right: 15px;"><a class="active" data-toggle="tab" href="#thumb1"><img src="{{ $sanPham->anh_dai_dien }}" alt="product-thumbnail"></a></div><div class="owl-item active" style="width: 140.833px; margin-right: 15px;"><a data-toggle="tab" href="#thumb2"><img src="{{ $sanPham->anh_dai_dien }}" alt="product-thumbnail"></a></div><div class="owl-item active" style="width: 140.833px; margin-right: 15px;"><a data-toggle="tab" href="#thumb3"><img src="{{ $sanPham->anh_dai_dien }}" alt="product-thumbnail"></a></div><div class="owl-item active" style="width: 140.833px; margin-right: 15px;"><a data-toggle="tab" href="#thumb4"><img src="/assets_homepage/{{ $sanPham->anh_dai_dien }}" alt="product-thumbnail"></a></div><div class="owl-item" style="width: 140.833px; margin-right: 15px;"><a data-toggle="tab" href="#thumb5"><img src="/assets_homepage/{{ $sanPham->anh_dai_dien }}" alt="product-thumbnail"></a></div></div></div><div class="owl-nav"><div class="owl-prev disabled"><i class="lnr lnr-arrow-left"></i></div><div class="owl-next"><i class="lnr lnr-arrow-right"></i></div></div><div class="owl-dots disabled"></div></div>
                    </div>
                    <!-- Thumbnail image end -->
                </div>
                <!-- Main Thumbnail Image End -->
                <!-- Thumbnail Description Start -->
                <div class="col-lg-7">
                    <div class="thubnail-desc fix">
                        <h3 class="product-header">{{ $sanPham->ten_san_pham }}</h3>
                        <div class="rating-summary fix mtb-10">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>

                        </div>
                        <div class="pro-price mtb-30">
                            <p class="d-flex align-items-center"><span class="prev-price">{{ number_format($sanPham->gia_ban, 0) }} VNĐ</span><span class="price">{{ number_format($sanPham->gia_khuyen_mai, 0) }} VNĐ</span><span class="saving-price">Sale {{ number_format( ($sanPham->gia_ban - $sanPham->gia_khuyen_mai) / $sanPham->gia_ban * 100) }}%</span></p>
                        </div>
                        <p class="mb-20 pro-desc-details">{{ $sanPham->mo_ta_ngan }}</p>
                        <div class="box-quantity d-flex hot-product2">
                            <form >
                                <input class="quantity mr-15" type="number" min="1" value="1">
                            </form>
                            <div class="pro-actions">
                                {{-- @foreach ($allSanPham as $key=>$value) --}}
                                    @if (Auth::guard('agent')->check())
                                        <div class="actions-primary">
                                            <a class="addToCart" type="button" title="Add to Cart" data-id= "{{ $sanPham->id }}" > + Add To Cart</a>
                                        </div>
                                    @elseif (Auth::guard('chap')->check())
                                        <div class="actions-primary">
                                            <a class="addToCart" type="button" title="Add to Cart" data-id= "{{ $sanPham->id }}" > + Add To Cart</a>
                                        </div>
                                    @else
                                        <div class="actions-primary">
                                            <a class="addToCart" type="button" title="Add to Cart" data-id= "{{ $sanPham->id }}" > + Add To Cart</a>
                                        </div>
                                    @endif
                                {{-- @endforeach --}}
                                <div class="actions-secondary">
                                    <a  title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a  title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Thumbnail Description End -->
            </div>
            <!-- Row End -->
        </div>
    </div>
    <!-- Container End -->
</div>

<div class="thumnail-desc pb-100 pb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="main-thumb-desc nav tabs-area" role="tablist">
                    <li><a class="active" data-toggle="tab" href="#dtail">Product Details</a></li>
                    <li><a data-toggle="tab" href="#review">Reviews 1</a></li>
                </ul>
                <!-- Product Thumbnail Tab Content Start -->
                <div class="tab-content thumb-content border-default">
                    <div id="dtail" class="tab-pane fade show active">
                        <p>
                            {{ $sanPham->mo_ta_chi_tiet }}
                        </p>
                    </div>
                    <div id="review" class="tab-pane fade">
                        <!-- Reviews Start -->
                        <div class="review border-default universal-padding">
                            <div class="group-title">
                                <h2>customer review</h2>
                            </div>
                            <h4 class="review-mini-title">Truemart</h4>
                            <ul class="review-list">
                                <!-- Single Review List Start -->
                                <li>
                                    <span>Quality</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <label>Truemart</label>
                                </li>
                                <!-- Single Review List End -->
                                <!-- Single Review List Start -->
                                <li>
                                    <span>price</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <label>Review by <a href="https://themeforest.net/user/hastech">Truemart</a></label>
                                </li>
                                <!-- Single Review List End -->
                                <!-- Single Review List Start -->
                                <li>
                                    <span>value</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <label>Posted on 7/20/18</label>
                                </li>
                                <!-- Single Review List End -->
                            </ul>
                        </div>
                        <!-- Reviews End -->
                        <!-- Reviews Start -->
                        <div class="review border-default universal-padding mt-30">
                            <h2 class="review-title mb-30">You're reviewing: <br><span>Faded Short Sleeves T-shirt</span></h2>
                            <p class="review-mini-title">your rating</p>
                            <ul class="review-list">
                                <!-- Single Review List Start -->
                                <li>
                                    <span>Quality</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <!-- Single Review List End -->
                                <!-- Single Review List Start -->
                                <li>
                                    <span>price</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <!-- Single Review List End -->
                                <!-- Single Review List Start -->
                                <li>
                                    <span>value</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <!-- Single Review List End -->
                            </ul>
                            <!-- Reviews Field Start -->
                            <div class="riview-field mt-40">
                                <form autocomplete="off" action="#">
                                    <div class="form-group">
                                        <label class="req" for="sure-name">Nickname</label>
                                        <input type="text" class="form-control" id="sure-name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="req" for="subject">Summary</label>
                                        <input type="text" class="form-control" id="subject" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="req" for="comments">Review</label>
                                        <textarea class="form-control" rows="5" id="comments" required="required"></textarea>
                                    </div>
                                    <button type="submit" class="customer-btn">Submit Review</button>
                                </form>
                            </div>
                            <!-- Reviews Field Start -->
                        </div>
                        <!-- Reviews End -->
                    </div>
                </div>
                <!-- Product Thumbnail Tab Content End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>

<div class="hot-deal-products off-white-bg pt-100 pb-90 pt-sm-60 pb-sm-50">
    <div class="container">
       <!-- Product Title Start -->
       <div class="post-title pb-30">
           <h2>Realted Products</h2>
       </div>
       <!-- Product Title End -->
        <!-- Hot Deal Product Activation Start -->
        <div class="hot-deal-active owl-carousel">
            <!-- Single Product Start -->
            @foreach ($allSanPham as $key=>$value)
                <div class="single-product">
                    <!-- Product Image Start -->
                    <div class="pro-img">
                        <a href="/san-pham/{{$value->slug_san_pham}}-post{{ $value->id }}">
                            <img class="primary-img" src="{{ $value->anh_dai_dien }}" alt="single-product">
                            <img class="secondary-img" src="{{ $value->anh_dai_dien }}" alt="single-product">
                        </a>
                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                    </div>
                    <!-- Product Image End -->
                    <!-- Product Content Start -->
                    <div class="pro-content">
                        <div class="pro-info">
                            <h4><a href="/san-pham/{{$value->slug_san_pham}}-post{{ $value->id }}">{{ $value->ten_san_pham }}</a></h4>
                            <p><span class="price">{{ number_format( $value->gia_khuyen_mai ,0) }} VNĐ</span></p>
                        </div>
                        <div class="pro-actions">
                            @if (Auth::guard('agent')->check())
                                <div class="actions-primary">
                                    <a class="addToCart" title="Add to Cart" data-id= "{{ $value->id }}" > + Add To Cart</a>
                                </div>
                            @else
                                <div class="actions-primary">
                                    <a class="addToCart" title="Add to Cart" data-id= "{{ $value->id }}" > + Add To Cart</a>
                                </div>
                            @endif
                            <div class="actions-secondary">
                                <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->
                    <span class="sticker-new">new</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

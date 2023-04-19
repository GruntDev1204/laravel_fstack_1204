@extends('home_page.master')

@section('content')

<div class="main-shop-page pb-100 ptb-sm-60">
    <div class="container">
        <!-- Row End -->
        <div class="row">
                <div class="main-categorie mb-all-40">
                    <!-- Grid & List Main Area End -->
                    <div class="tab-content fix">
                        @include('home_page.pages.compoment_san_pham.list_san_pham')
                        <!-- #grid view End -->
                        <div id="list-view" class="tab-pane fade">
                            @foreach ($sanPham as $key => $value)
                            <div class="single-product">
                                <div class="row">
                                    <!-- Product Image Start -->
                                    <div class="col-lg-4 col-md-5 col-sm-12">
                                        <div class="pro-img">
                                            <a href="/san-pham/{{$value->slug_san_pham}}-post{{ $value->id }}">{{ $value->ten_san_pham }}">
                                                <img class="primary-img" src="{{ $value->anh_dai_dien }}" alt="single-product">
                                                <img class="secondary-img" src="{{ $value->anh_dai_dien }}" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                             <span class="sticker-new">new</span>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                        <div class="pro-content hot-product2">
                                            <h4><a href="/san-pham/{{$value->slug_san_pham}}-post{{ $value->id }}">{{ $value->ten_san_pham }}">{{ $value->ten_san_pham }}</a></h4>
                                            <p><span class="price">{{ number_format($value->gia_khuyen_mai, 0) }} VNĐ</span></p>
                                            <p>{!! strlen($value->mo_ta_ngan) > 200 ? substr($value->mo_ta_ngan, 0, 150) . "..." : $value->mo_ta_ngan !!}</p>
                                            <div class="pro-actions">
                                                @if (Auth::guard('agent')->check())
                                                    <div class="actions-primary">
                                                        <a href="#" title="Add to Cart" > + Add To Cart</a>
                                                    </div>
                                                @else
                                                    <div class="actions-primary">
                                                        <a href="cart.html" title="Add to Cart" data-toggle="modal" data-target="#myModal" > + Add To Cart</a>
                                                    </div>
                                                @endif
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!-- #list view End -->
                        <div class="pro-pagination">
                            <ul class="blog-pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                            <div class="product-pagination">
                                <span class="grid-item-list">Showing 1 to 12 of 51 (5 Pages)</span>
                            </div>
                        </div>
                        <!-- Product Pagination Info -->
                    </div>
                    <!-- Grid & List Main Area End -->
                </div>
         </div>
    </div>
    <!-- Container End -->
</div>

@endsection

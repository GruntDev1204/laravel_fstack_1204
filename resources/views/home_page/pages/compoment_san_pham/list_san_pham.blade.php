<div id="grid-view" class="tab-pane fade show active">
    <div class="row">
        <!-- Single Product Start -->
        @foreach ($sanPham as $key => $value)
        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
            <div class="single-product">
                <!-- Product Image Start -->
                <div class="pro-img">
                    <a href="/san-pham/{{$value->slug_san_pham}}-post{{ $value->id }}">
                        <img class="primary-img" src="{{ $value->anh_dai_dien }}" alt="single-product">
                        <img class="secondary-img" src="{{ $value->anh_dai_dien }}" alt="single-product">
                    </a>
                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                </div>
                <!-- Product Image End -->
                <!-- Product Content Start -->
                <div class="pro-content">
                    <div class="pro-info">
                        <h4><a href="/san-pham/{{$value->slug_san_pham}}-post{{ $value->id }}">{{ $value->ten_san_pham }}</a></h4>
                        <p><span class="price">{{ number_format($value->gia_khuyen_mai, 0) }} VNĐ</span><del class="prev-price">$400.50</del></p>
                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                    </div>
                    <div class="pro-actions">
                        @if (Auth::guard('agent')->check())
                            <div class="actions-primary">
                                <a href="#" title="Add to Cart" > + Add To Cart</a>
                            </div>
                        @elseif(Auth::guard('chap')->check())
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
                <!-- Product Content End -->
            </div>
        </div>
        @endforeach

        <!-- Single Product End -->

    </div>
    <!-- Row End -->
</div>

{{-- Modal bắt đăng kí trước khi mua hàng ở list --}}

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" >
        <div class="modal-header text-center">
          <h5 >Cám ơn bạn đã chọn mua sản phẩm!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form >
                <div class="alert alert-warning" role="alert">
                    Bạn phải đăng nhập hoặc đăng kí để mua sản phẩm!!!
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" id="password" class="form-control"  placeholder="Password">
                </div>
        </div>
        <div class="modal-footer">
                <button type="button" id="login" class="btn btn-primary">Đăng Nhập</button>
                <a href="/agent/register" type="button" class="btn btn-info ml-2">Đăng Kí</a>

        </div>
        </form>
      </div>
    </div>
</div>

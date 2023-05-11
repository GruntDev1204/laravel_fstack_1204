@extends('home_page.master')
@section('content')
    <div class="cart-main-area ptb-100 ptb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    @if (Auth::guard('agent')->check())
                          @include('home_page.pages.cart.tableAgent')
                    @elseif(Auth::guard('chap')->check())
                        @include('home_page.pages.cart.tableUser')
                    @else
                      @include('home_page.ERR')
                    @endif
                    <!-- Form End -->
                </div>
            </div>
            <!-- Row End -->
        </div>
    </div>
@endsection


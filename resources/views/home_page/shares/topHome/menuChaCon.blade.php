<div class="header-bottom  header-sticky">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-9 col-lg-8 col-md-12 ">
                <nav class="d-none d-lg-block">
                    <ul class="header-bottom-list d-flex">
                        <li class="active"><a href="/client">Home<i class="fa fa-angle-down"></i></a>
                        </li>
                        @foreach ($menuCha as $value_cha)
                            <li>
                                <a
                                    href="/danh-muc/{{ $value_cha->slug_danh_muc }}-post{{ $value_cha->id }}">{{ $value_cha->ten_danh_muc }}</a>
                                <ul class="ht-dropdown">
                                    @foreach ($menuCon as $value_con)
                                        @if ($value_con->id_danh_muc_cha == $value_cha->id)
                                            <li><a
                                                    href="/danh-muc/{{ $value_con->id }}">{{ $value_con->ten_danh_muc }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>

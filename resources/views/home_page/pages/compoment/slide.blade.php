<div class="main-page-banner pb-50 off-white-bg">
    <div class="container">
        <div class="row">
            {{-- @include('home_page.shares.menu') --}}
            <div class="container  slider_box">
                <div class="slider-wrapper theme-default" >
                    <div id="slider" class="nivoSlider mt-2">
                        @for($i = 1; $i < 6; $i++)
                            @php
                                $name = 'slide_' . $i;
                            @endphp
                            @if(isset($config->$name) && Str::length($config->$name) > 0)

                                <img style="height: 540px;width:1110px" src="{{ $config->$name }}" data-thumb="{{ $config->$name }}">

                            @endif
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
@if (Auth::guard('chap')->check())
<title> {{ Auth::guard('chap')->user()->ho_va_ten }}</title>
@elseif (Auth::guard('agent')->check())
<title> {{ Auth::guard('agent')->user()->ho_va_ten }}</title>
@else
<title>Trung's Mart </title>
@endif
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicons -->
<link rel="shortcut icon" href="/assets_homepage/img/favicon.ico">
<!-- Fontawesome css -->
<link rel="stylesheet" href="/assets_homepage/css/font-awesome.min.css">
<!-- Ionicons css -->
<link rel="stylesheet" href="/assets_homepage/css/ionicons.min.css">
<!-- linearicons css -->
<link rel="stylesheet" href="/assets_homepage/css/linearicons.css">
<!-- Nice select css -->
<link rel="stylesheet" href="/assets_homepage/css/nice-select.css">
<!-- Jquery fancybox css -->
<link rel="stylesheet" href="/assets_homepage/css/jquery.fancybox.css">
<!-- Jquery ui price slider css -->
<link rel="stylesheet" href="/assets_homepage/css/jquery-ui.min.css">
<!-- Meanmenu css -->
<link rel="stylesheet" href="/assets_homepage/css/meanmenu.min.css">
<!-- Nivo slider css -->
<link rel="stylesheet" href="/assets_homepage/css/nivo-slider.css">
<!-- Owl carousel css -->
<link rel="stylesheet" href="/assets_homepage/css/owl.carousel.min.css">
<!-- Bootstrap css -->
<link rel="stylesheet" href="/assets_homepage/css/bootstrap.min.css">
<!-- Custom css -->
<link rel="stylesheet" href="/assets_homepage/css/default.css">
<!-- Main css -->
<link rel="stylesheet" href="/assets_homepage/style.css">
<!-- Responsive css -->
<link rel="stylesheet" href="/assets_homepage/css/responsive.css">
@yield('css')
<!-- Modernizer js -->
<script src="/assets_homepage/js/vendor/modernizr-3.5.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/> --}}
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script>
@toastr_css

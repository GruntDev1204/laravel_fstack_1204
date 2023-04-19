<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @if (Auth::guard('AdminSndg')->check())
  <title>{{Auth::guard('AdminSndg')->user()->ho_va_ten}}</title>
  @else
  <title> SNDG COIN</title>
  @endif


  <!-- Google Font: Source Sans Pro -->
  @include('dogechain.top')
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper"  >
   @include('dogechain.admin.headerAdmin')
   @yield('indexSetting')
  </div>
 </body>

</div>
<script src="/dogechain/doge/adminSetting.js"></script>
@include('dogechain.bot')
</html>

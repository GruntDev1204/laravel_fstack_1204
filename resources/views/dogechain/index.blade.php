<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> SNDG COIN</title>

  <!-- Google Font: Source Sans Pro -->
  @include('dogechain.top')
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div id="app">
    <div class="wrapper">

        @include('dogechain.header')

         <!-- vùng body -->
         @include('dogechain.body')
         @yield('body')

         <aside class="control-sidebar control-sidebar-dark">
           <!-- Control sidebar content goes here -->
         </aside>

    </div>
</div>
</body>
<script src="/dogechain/doge/main.js"></script>
@include('dogechain.bot')
</html>

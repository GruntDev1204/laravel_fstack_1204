@extends('new_admin.master')
@section('css')
<link rel="stylesheet" href="/new_assets_admin/CSSbyMySELF/solarsystem.css" type="text/css">
@endsection
@section('title')
<h3 style="color: red">  Chào Mừng Bạn Đến Với Admin Home!</h3>
@endsection
@section('content')
<section class="clearfix">
    <ul class="solarsystem">
      <li class="sun"><a href="#sun"><span>Mặt trời</span></a></li>
      <li class="mercury"><a href="#mercury"><span>Sao thủy</span></a></li>
      <li class="venus"><a href="#venus"><span>Sao Kim</span></a></li>
      <li class="earth"><a href="#earth"><span>Trái Đất<span class="moon"> &amp; Chị Hằng</span></span></a></li>
      <li class="mars"><a href="#mars"><span>Sao Hỏa</span></a></li>
      <li class="asteroids_meteorids"><span>Asteroids &amp; Meteorids</span></li>
      <li class="jupiter"><a href="#jupiter"><span>Sao Mộc</span></a></li>
      <li class="saturn"><a href="#saturn"><span>Sao Thổ &amp; <span class="ring">Vành Đai</span></span></a></li>
      <li class="uranus"><a href="#uranus"><span>Sao Thiên Vương</span></a></li>
      <li class="neptune"><a href="#neptune"><span>Sao Hải Vương</span></a></li>
      <li class="pluto"><a href="#pluto"><span>Diêm Vương</span></a></li>
    </ul>
</section>
@endsection

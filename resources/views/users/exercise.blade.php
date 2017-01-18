@extends('layouts.default')

@section('title', 'マイページ')

@section('header_nav')
@include('includes.hd_nav')
@endsection

@section('content')
<div class="container">
@include('includes.nav_side')
</div>
@endsection
@section('footer')
<footer>
  <div class="footer_in">
    <div class="copyright">
        Copyright&copy;Tomohiro Horiuchi All Right Reserved.
    </div>
  </div>
</footer>
@endsection

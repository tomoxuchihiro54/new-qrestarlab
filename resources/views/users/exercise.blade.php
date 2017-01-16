@extends('layouts.default')

@section('title', 'マイページ')

@section('header_nav')
@include('includes.hd_nav')
@endsection

@section('content')
<div class="container">
  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    <nav class="panel panel-default">
      <h2 class="panel-heading">カテゴリー</h2>
      <ul class="nav nav-pills nav-stacked">
      </ul>
    </nav>
  </div>
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

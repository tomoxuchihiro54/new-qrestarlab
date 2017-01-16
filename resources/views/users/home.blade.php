@extends('layouts.default')

@section('title', 'マイページ')

@section('header_nav')
@include('includes.hd_nav')
@endsection

@section('content')
<div class="container">
  <div class="ly-home-area">
    <!-- ▼学習中の問題▼ -->
    <div class="col-sm-6 col-xs-6">
      <div class="ly-ans-block ly-learning">
        <a href="{{ url('/home/learning') }}">
          <img class="ly-db-img" src="/images/d-learning.png">
          <p class="text-center">学習中の問題</p>
        </a>
      </div>
    </div>
    <!-- ▲学習中の問題▲ -->
    <!-- ▼問題を作る▼ -->
    <div class="col-sm-6 col-xs-6">
      <div class="ly-ans-block ly-learning">
        <a href="{{ url('/home/kit') }}">
          <img class="ly-db-img" src="/images/d-kit.png">
          <p class="text-center">問題を作る</p>
        </a>
      </div>
    </div>
    <!-- ▲問題を作る▲ -->
    <!-- ▼解答結果▼ -->
    <div class="col-sm-6 col-xs-6">
      <div class="ly-ans-block">
        <a href="{{ url('/home/answer_history') }}">
          <img class="ly-db-img" src="/images/d-graph.png">
          <p class="text-center">解答結果</p>
        </a>
      </div>
    </div>
    <!-- ▼解答結果▼ -->
    <!-- ▼成長率▼ -->
    <div class="col-sm-6 col-xs-6">
      <div class="ly-ans-block">
        <a href="{{ url('/home/result_trands') }}">
          <img class="ly-db-img" src="/images/d-line-graph.png">
          <p class="text-center">成績推移</p>
        </a>
      </div>
    </div>
    <!-- ▲成長率▲ -->
  </div>
  <div class="col-sm-12 col-xs-12">
    <a href="{{ url('/exam') }}" class="btn btn-success btn-block ly-btn-q">問題を探す</a>
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

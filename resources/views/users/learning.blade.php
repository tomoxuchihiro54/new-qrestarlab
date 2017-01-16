@extends('layouts.default')

@section('title', 'マイページ')

@section('header_nav')
@include('includes.hd_nav')
@endsection

@section('content')
<div class="container">
  <div class="my-learning-header">
        <div class="container">
            <div class="pos-r my-learning">
                マイコース
            </div>
            <ul class="pos-r nav nav-tabs tabs mt10" role="tablist">
                <li>
                    <a href="/home/my-courses/learning/" data-purpose="learning-tab">
                       すべてのコース
                   </a>
                </li>


                <li>
                    <a href="/home/my-courses/wishlist/" data-purpose="wishlist-tab">
                       ほしい物リスト
                   </a>
                </li>

                <li ng-class="{active: viewModel.currentTab == 'archived'}">
                    <a href="/home/my-courses/archived/" data-purpose="archived-tab">
                        アーカイブ
                    </a>
                </li>

            </ul>
        </div>
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

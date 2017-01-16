@extends('layouts.default')

@section('title', 'QrestarLab(クレスターラボ)')

@section('header_nav')
@include('includes.hd_nav')
@endsection

@section('content')
<!-- ▼main_img▼ -->
<div class="main_img cover">
  <div class="container main_img_in">
    <div class="ly-content-in">
      <div class="caption">
        <h2>日々の学習を記録しよう</h2>
        <p><strong>法律資格試験</strong>は１年１回！合格を勝ち取るために、日々の学習状況を記録・視覚化して、弱点を発見しよう！</p>
      </div>
      <div class="sign_up_btn">
          <a href=""class="btn btn-primary btn-lg"><i class="fa fa-pencil" aria-hidden="true"></i>新規登録</a>
      </div>
    </div>
  </div>
</div>
<!-- ▲main_img▲ -->
<!-- ▼ container -->
<div class="wrapper">
  <div class="container">
    <div class="three_points">
      <h2>QrestarLabとは？</h2>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="content_block">
          <img src="/images/study.png">
          <h3>問題学習の記録</h3>
          <p>資格試験の過去問を解くことで、知識整理をし、
            1問当たりにかかる時間を計測することで、
            時間の限られた本番の試験への対応力を養うことができます</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="content_block">
          <img src="/images/pie.png">
          <h3>正答率の視覚化</h3>
          <p>問題演習の結果を記録することで、正答率をグラフ化し
            問題に対する自分のステータスを確認できます</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="content_block">
          <img src="/images/line-graph.png">
          <h3>成績推移の視覚化</h3>
          <p>問題に対する、得点の推移を視覚的に確認することで、合格までにやるべきことを把握できます</p>
        </div>
      </div>
    </div>
    <!-- ▲ container - end -->
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

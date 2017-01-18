<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <nav class="ly-side-nav panel panel-default">
    <h2 class="ly-cat-tit panel-heading">カテゴリー</h2>
    <ul class="nav nav-pills nav-stacked">
      @foreach ($nodes as $node)
      <li><a href="{{ url('/exercise',$node->id) }}">{{ $node->name }}</a></li>
        @if (isset($grandchildren))
        @foreach ($grandchildren as $grandchild)
        <ul class="nav nav-pills nav-stacked">
          <li><a href="{{ url('/exercise',$grandchild->id) }}">{{ $grandchild->name }}</a></li>
        </ul>
        @endforeach
        @endif
      @endforeach
    </ul>
  </nav>
</div>

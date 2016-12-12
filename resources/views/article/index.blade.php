@extends('layouts.app')

@section('content')
@foreach($articles as $article)
<div class="panel panel-default">
    <div class="panel-heading">
        <strong><i class="fa fa-comments-o"></i>  <a href="{{ url('article/'. $article->id) }} "> {{ $article->title }}</a></strong>
    </div>
<div class="panel-body">{{ $article->body }}</div>
    <div class="panel-footer text-right"> <small><i class="fa fa-user"></i> By <a href="/User/{{ $article->user_id }}"><strong>{{ $article->user->name }}</strong></a> <i class="fa fa-calendar"></i> published at <strong>{!! $article->published_at->diffForHumans() !!}</strong></small></div>
</div>
@endforeach
<div class="col-md12 text-right">
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="/article/page/1">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
@endsection

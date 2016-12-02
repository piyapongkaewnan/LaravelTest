@extends('layouts.app')

@section('content')
@foreach($articles as $article)
<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-bullhorn"></i>  <a href="{{ url('article/'. $article->id) }} "> {{ $article->title }}</a>
    </div>
<div class="panel-body">{{ $article->body }}</div>
    <div class="panel-footer  text-right"> <small><i class="fa fa-calendar"></i> published at : {{ $article->published_at->diffForHumans() }}</small></div>
</div>
</div>
@endforeach
@endsection

@extends('layouts.app')
@section('content')
<a href="{{ url('article/') }} "> <i class="fa fa-backward"></i> Back</a><h3>Articles List detail</h3>

<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-comments-o"></i> {{ $article->title }}
    </div>
    <div class="panel-body">{{ $article->body }}</div>
    <div class="panel-footer text-right"> <small><i class="fa fa-calendar"></i> published at : {{ $article->published_at->diffForHumans() }}</small></div>
</div>
@endsection

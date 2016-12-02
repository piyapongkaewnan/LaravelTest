@extends('layouts.app')

@section('content')
@foreach($articles as $article)
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-bullhorn"></i> {{ $article->title }}
    </div>
    <div class="panel-body">{{ $article->body }}</div>
    <div class="panel-footer text-right"> <small><i class="fa fa-calendar"></i> published at : {{ $article->published_at }}</small></div>
</div>
@endforeach
@endsection

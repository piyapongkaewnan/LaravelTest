@extends('layouts.app')
@section('content')
<a href="{{ url('article/') }} "> <i class="fa fa-backward"></i> Back</a><h3>Articles List detail</h3>

<div class="panel panel-default">
    <div class="panel-heading">
      <div class="row">
        <div class="col-md-10">  <strong><i class="fa fa-comments-o"></i> {{ $article->title }} </strong></div>
        <div class="col-md-2 text-right">
          @if (Auth::check())
          {!! Form::open( ['method' =>'DELETE' , 'url' => 'article/'. $article->id]) !!}
          <a href="/article/{{ $article->id }}/edit" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit </a>
          <!-- //{!! Form::submit('DELETE', ['class' => 'btn btn-danger btn-xs']) !!} -->
          {!! Form::button( '<i class="fa fa-trash"></i> Delete', ['class'=> 'btn btn-danger btn-xs','type'=>'submit'])!!}
          {!! Form::close() !!}
          @endif
        </div>
      </div>

    </div>
    <div class="panel-body">{!! $article->body !!}</div>
    <div class="panel-footer text-right">
     <small><i class="fa fa-user"></i> By <a href="/User/{{ $article->user_id }}"><strong>{{ $article->user->name }}</strong></a> <i class="fa fa-calendar"></i> published at <strong>{!! $article->published_at->diffForHumans() !!}</strong></small>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<h2><i class="fa fa-plus"></i> Add new Article</h2>
{!! Form::open(['url' => '/article'] , ['class' => 'form-group']) !!}

{!! Form::label('title', 'Article Title :') !!}
{!! Form::text('title', null,  ['class' => 'form-control']) !!}

{!! Form::label('body', 'Article Body :') !!}
{!! Form::textarea('body', null,  ['class' => 'form-control']) !!}

{!! Form::label('published_at', 'Article Publish :') !!}
{!! Form::date('published_at', Carbon\Carbon::now()->format('Y-m-d'),  ['class' => 'form-control']) !!}
<br>
{!! Form::submit('Add Article', ['class'=> 'btn btn-primary'])!!}
{!! Form::close() !!}
@endsection

@extends('layouts.app')
@section('content')
<h3><i class="fa fa-pencil"></i> Edit Article</h3>
<hr>
{!! Form::model( $article , ['method' => 'put' , 'action' => ['ArticleController@update' , $article->id ]] , ['class' => 'form-group']) !!}

@include('article._form', ['submitButtonText' => '<i class="fa fa-save"></i> Edit Article'])
{!! Form::close() !!}
@endsection

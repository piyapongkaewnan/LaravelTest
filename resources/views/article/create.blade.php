@extends('layouts.app')
@section('content')

<h3><i class="fa fa-plus"></i> Add new Article</h3>
<hr>
{!! Form::open(['url' => '/article'] , ['class' => 'form-group']) !!}

@if($errors->any())
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning! Please fill data in below.</strong>
  <ul>
  @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </ul>
</div>
  @endif

@include('article._form', ['submitButtonText' => '<i class="fa fa-save"></i> Add Article'])

{!! Form::close() !!}
@endsection

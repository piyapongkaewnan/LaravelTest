@extends('layouts.app')
@section('content')

<h3><i class="fa fa-plus"></i> Add new Article</h3>
<hr>
{!! Form::open(['url' => '/article'] , ['class' => 'form-group']) !!}

@include('article._form', ['submitButtonText' => '<i class="fa fa-save"></i> Add Article'])

{!! Form::close() !!}
@endsection

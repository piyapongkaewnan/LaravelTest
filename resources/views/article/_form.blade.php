@if($errors->any())
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong><i class="fa fa-info-circle"></i> Please fill information in below !!</strong>
  <ul>
  @foreach($errors->all() as $error)
    <li type="square">{{ $error }}</li>
  @endforeach
  </ul>
</div>
  @endif

{!! Form::label('title', 'Article Title :') !!}
{!! Form::text('title', null ,  ['class' => 'form-control' , 'placeholder'=>'Article title' ] ) !!}

{!! Form::label('body', 'Article Body :') !!}
{!! Form::textarea('body', null,  ['class' => 'form-control', 'placeholder'=>'Article Body']) !!}

{!! Form::label('published_at', 'Article Publish :') !!}
{!! Form::date('published_at', Carbon\Carbon::now()->format('Y-m-d'),  ['class' => 'form-control']) !!}
<br>
{!! Form::button( $submitButtonText, ['class'=> 'btn btn-primary','type'=>'submit'])!!}

<a href="{{ URL::previous() }} " class="btn btn-warning"> <i class="fa fa-close"></i> Cancel</a>

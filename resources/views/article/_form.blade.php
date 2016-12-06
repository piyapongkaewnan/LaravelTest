{!! Form::label('title', 'Article Title :') !!}
{!! Form::text('title', null ,  ['class' => 'form-control' , 'placeholder'=>'Article title' ] ) !!}

{!! Form::label('body', 'Article Body :') !!}
{!! Form::textarea('body', null,  ['class' => 'form-control', 'placeholder'=>'Article Body']) !!}

{!! Form::label('published_at', 'Article Publish :') !!}
{!! Form::date('published_at', Carbon\Carbon::now()->format('Y-m-d'),  ['class' => 'form-control']) !!}
<br>
{!! Form::button( $submitButtonText, ['class'=> 'btn btn-primary','type'=>'submit'])!!}

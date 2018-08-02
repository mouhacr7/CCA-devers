@extends('layouts.app')

@section('content')
<h1>Contact</h1>


{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('nom', 'Nom')}}
        {{Form::text('nom', '',['class'=>'form-control','placeholder'=>'entrer votre nom'])}}
    </div>

     <div class="form-group">
        {{Form::label('mail', 'E-Mail')}}
        {{Form::text('mail', '',['class'=>'form-control','placeholder'=>'example@gmail.com'])}}
    </div>

    <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '',['class'=>'form-control','placeholder'=>'ecrivez quelque chose'])}}
    </div>
    <div>
        {{Form::submit('Envoyer',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection

@section('sidebar')
<p>this is sidebar contact</p>
@endsection
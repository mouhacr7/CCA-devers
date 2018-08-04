@extends('layouts.master')
@section('content')



<h1>Contact</h1>
		{!! Form::open(['url'=>'contact/submit']) !!}
		{{Form::token()}}
		<div class="from-row">

			<div class="Form-group col-md-4" style="display: inline-block;"> 
				{{Form::label('inputEmail4', 'Nom')}}
		        {{Form::text('nom', '',['class'=>'form-control','id'=>'inputEmail4','placeholder'=>'entrer votre nom'])}}
		    </div>

		    <div class="Form-group col-md-4" style="display: inline-block;"> 
				{{Form::label('inputEmail4', 'Prenom')}}
		        {{Form::text('prenom', '',['class'=>'form-control','id'=>'inputEmail4','placeholder'=>'entrer votre Prenom'])}}
		    </div>


		    <div class="Form-group col-md-4" style="display: inline-block;"> 
				{{Form::label('inputEmail4', 'Email')}}
		         {{Form::email('email','',['class'=> 'form-control',
		         'id'=>'inputEmail4','placeholder'=>'entre votre email'])}}
		    </div>



		    <div class="Form-group col-md-4" style="display: inline-block;"> 
				{{Form::label('inputEmail4', 'Numero Mobile')}}
		        {{Form::text('numero', '',['class'=>'form-control','id'=>'inputEmail4','placeholder'=>'entrer votre numero'])}}
		    </div>


		    <div class="Form-group col-md-4" > 
            {{Form::label('inputEmail4', 'Choisir une danse')}}
                {{Form::select('2', ['L' => 'Large', 'S' => 'Small'],' ')}}
		    </div>

            <br><div class="form-group">
                {{Form::label('message', 'Message')}}
                {{Form::textarea('message', '',['class'=>'form-control','placeholder'=>'ecrivez quelque chose'])}}
            </div>
            <div>
                {{Form::submit('Envoyer',['class'=>'btn btn-primary'])}}
            </div>
{!! Form::close() !!}
@endsection


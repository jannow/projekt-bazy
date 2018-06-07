@extends('layout.layout')


@section('content')

	<div class="container">
		<br><br>
				<h3>Dodaj Kierownika</h3>
				{!! Form::open(array('route'=>'kierownik.store')) !!}

				{{ Form::label('Imie','Imie:') }}
				{{ Form::text('Imie',null,array('class'=>'form-control')) }}

				{{ Form::label('Nazwisko','Nazwisko:') }}
				{{ Form::text('Nazwisko',null,array('class'=>'form-control')) }}
				<br>

				{{ Form::submit('Dodaj Kierownika'),array('class'=>'btn')}}

				{!! Form::close() !!}
			</div>

@endsection

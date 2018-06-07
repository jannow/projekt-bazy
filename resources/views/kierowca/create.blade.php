@extends('layout.layout')

@section('content')

	<div class="container">
		<br><br>
				<h3>Dodaj Kierowcę</h3>
				{!! Form::open(array('route'=>'kierowca.store')) !!}

				{{ Form::label('Imie','Imię:') }}
				{{ Form::text('Imie',null,array('class'=>'form-control')) }}

				{{ Form::label('Nazwisko','Nazwisko:') }}
				{{ Form::text('Nazwisko',null,array('class'=>'form-control')) }}

				{{ Form::label('Zmiana','Godziny pracy:') }}
				{{ Form::select('Zmiana',$godziny,null,array('class'=>'form-control')) }}
				<br>

				{{ Form::submit('Dodaj Kierowcę'),array('class'=>'btn')}}

				{!! Form::close() !!}
			</div>

@endsection

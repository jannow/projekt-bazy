@extends('layout.layout')

@section('content')

	<div class="container">
		<br><br>
				<h3>Zarejestruj Kierownika</h3>
				{!! Form::open(array('route'=>'zarejestrujkierownika.store')) !!}

				{{ Form::label('Kierownicy_idKierownicy','Kierownik:') }}
				{{ Form::select('Kierownicy_idKierownicy',$Kierownik,null,array('class'=>'form-control')) }}


				{{ Form::label('login','login:') }}
				{{ Form::text('login',null,array('class'=>'form-control')) }}

				{{ Form::label('Haslo','Haslo:') }}
				{{ Form::password('Haslo',['class'=>'form-control']) }}
				<br>
				{{ Form::submit('Zarejestruj Kierownika'),array('class'=>'btn')}}

				{!! Form::close() !!}
			</div>

@endsection

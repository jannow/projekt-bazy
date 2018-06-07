@extends('layout.layout')

@section('content')

	<div class="container">
		<br><br>
				<h3>Zarejestruj Kierowcę</h3>
				{!! Form::open(array('route'=>'zarejestrujkierowce.store')) !!}

				{{ Form::label('Kierowcy_idKierowcy','Kierowca:') }}
			{{ Form::select('Kierowcy_idKierowcy',$kierowca,null,array('class'=>'form-control')) }}

				{{ Form::label('login','Login:') }}
				{{ Form::text('login',null,array('class'=>'form-control')) }}

				{{ Form::label('Haslo','Hasło:') }}
				{{ Form::password('Haslo',['class'=>'form-control']) }}
				<br>
				{{ Form::submit('Zarejestruj Kierowcę'),array('class'=>'btn')}}

				{!! Form::close() !!}
			</div>

@endsection

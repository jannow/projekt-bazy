@extends('layout.layout')

@section('content')
	
	<div class="row">
			<div class="col-md-4">
				<h3>Dodaj Autobus</h3>
				
				{!! Form::open(array('route'=>'autobusy.store')) !!}

				{{ Form::label('Marka','Marka:') }}
				{{ Form::text('Marka',null,array('class'=>'form-control')) }}

				{{ Form::label('Nr_rejestracyjny','Nr_rejestracyjny:') }}
				{{ Form::text('Nr_rejestracyjny',null,array('class'=>'form-control')) }}

				{{ Form::label('Przegląd','Przegląd do:') }}
				{{ Form::date('Przeglad',null,array('class'=>'form-control')) }}

				{{ Form::submit('Dodaj Autobus'),array('class'=>'btn')}}

				{!! Form::close() !!}
			</div>	
	</div>

@endsection
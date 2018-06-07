@extends('layout.layout')

@section('content')
	
	<div class="row">
			<div class="col-md-3">
				<h3>Dodaj Bilety</h3>
				{!! Form::open(array('route'=>'bilety.store')) !!}

				{{ Form::label('idBilety','Rodzaj biletu:') }}
				{{ Form::select('idBilety',$bil,null,array('class'=>'form-control')) }}
				<br>
				{{ Form::label('Ilosc_biletow','Ilosc biletow:') }}
				{{ Form::number('Ilosc_biletow',null,array('class'=>'form-control')) }}

				{{ Form::submit('Dodaj Bilety'),array('class'=>'btn')}}

				{!! Form::close() !!}
			</div>	
	</div>

@endsection
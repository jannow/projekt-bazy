
@extends('layout.layout')
@section('content')

	<h2>Cennik Biletów</h2>
	<table>
		<tr>
			<th>Rodzaj biletu:</th><th>Cena biletu:</th>
		</tr>

		@foreach($ticket as $klucz=>$wartosc)
		<tr>
			<td>{{$klucz}}</td><td>{{$wartosc}} zł</td>
		</tr>
		@endforeach
	</table>
@endsection

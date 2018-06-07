<?php namespace App\Http\Controllers; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Projekt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<style>
            body,html {
                background-color: #bfbfbf;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 70;
                height: 100%;
                margin: 0px;
                padding: 0px;
            }

        </style>

</head>
<body>
<img src="http://localhost/img/1.png" width=100%>

<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

if (Auth::User()
//->Uprawnienia_idUprawnienia>0
) {

	echo 'Zalogowany';
	$i=1;

}
	else
{
  echo 'Wylogowany';
	$i=2;
}



?>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">MZK</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{ url('/') }}">Strona Główna <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/map') }}">Mapa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/timetable') }}">Rozkład Jazdy</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('cennik') }}">Cennik</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Zarządzanie
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ url('/bilety/create') }}">Dodaj bilety</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{ url('/kierowca/create') }}">Dodaj kierowcę</a>
						<a class="dropdown-item" href="{{ url('/zarejestrujkierowce/create') }}">Zarejestruj kierowcę</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{ url('/kierownik/create') }}">Dodaj kierownika</a>
						<a class="dropdown-item" href="{{ url('/zarejestrujkierownika/create') }}">Zarejestruj kierownika</a>
					</div>
				</li>
					<a class="nav-link" href="{{ url('/logout') }}">Wyloguj</a>
	</ul>
		</div>
		</nav>


		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">MZK</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{ url('/') }}">Strona Główna <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/map') }}">Mapa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/timetable') }}">Rozkład Jazdy</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('cennik') }}">Cennik</a>
				</li>
			</ul>
			<ul class="navbar-nav">
					<a class="nav-link" href="{{ url('/login') }}">Zaloguj</a>
	</ul>
		</div>
		</nav>
















	<div id="main" >

    @yield('content')
	</div>


	<div id="footer" >

	</div>












	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>

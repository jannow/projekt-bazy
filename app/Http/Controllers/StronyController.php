<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StronyController extends Controller
{
	public function getHome()
	{
		return view('layout.layout');
	}
	public function getLogin()
	{
		return view('/login');
	}
	public function getZarzadzaj()
	{
		return view('/management');
	}
	public function getDodajKierowce()
	{
		return view('/kierowca/dodajKierowce');
	}
	public function getZarejestrujKierowce()
	{
		return view('/kierowca/zarejestrujKierowce');
	}
	public function getDodajKierownika()
	{
		return view('/kierownik/dodajKierownika');
	}
	public function getZarejestrujKierownika()
	{
		return view('/kierownik/zarejestrujKierownika');
	}
	public function getMapa()
	{
		return view('/mapa/map');
	}
}

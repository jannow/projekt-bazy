<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ZarejestrujKierownika;
use App\Kierownik;
class ZarejestrujKierownikaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $lista=Kierownik::all();
      $Kierownik=[];
      foreach ($lista as $wart) {
          $Kierownik[$wart->idKierownicy]=$wart->Imie." ".$wart->Nazwisko;
      }
      return view('zarejestrujkierownika.create',compact('Kierownik'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'login'=>'required',
            'Haslo'=>'required',
        ));

        $zarej= new ZarejestrujKierownika;
        $zarej->login=$request->login;
        $zarej->Haslo=bcrypt($request->Haslo);
        $zarej->aktywne=0;
        $zarej->Administratorzy_idAdministratorzy=null;
        $zarej->Kierowcy_idKierowcy=null;
        $zarej->Kierownicy_idKierownicy=$request->Kierownicy_idKierownicy;
        $zarej->Uprawnienia_idUprawnienia=2;
        $zarej->save();

        return redirect()->route('zarejestrujkierownika.show', $zarej->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

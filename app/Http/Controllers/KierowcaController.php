<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kierowca;
use App\GodzinyPracy;
class KierowcaController extends Controller
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
      $zmiana=GodzinyPracy::all();
        $godziny=[];
        foreach ($zmiana as $wart) {
            $godziny[$wart->idGodziny_Pracy]=$wart->Rozpoczecie_pracy." - ".$wart->Zakonczenie_pracy;
        }
        return view('kierowca.create',compact('godziny'));

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
            'Imie'=>'required',
            'Nazwisko'=>'required'
        ));

            $nowykierowca=new kierowca;
            $nowykierowca->Imie=$request->Imie;
            $nowykierowca->Nazwisko=$request->Nazwisko;
            $nowykierowca->Zmiana=$request->Zmiana;
            $nowykierowca->save();

            return redirect()->route('kierowca.show', $nowykierowca->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kierowca = DB::table('kierowcy')->get();

        //
        // $nowykierowca=new kierowca;
        // $imie = $nowykierowca->get()->where('id','1')->first();
        // var_dump($imie);
        //var_dump($nowykierowca);
        //echo $nowykierowca->idKierowca;
        // foreach ($nowykierowca as $kierowca) {
        //   var_dump( $kierowca->Imie);
        // }
        return view('kierowca.show', ['kierowca'=>$kierowca]);
        // return view('kierowca.show', ['nowykierowca'=>$imie->Imie]);

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

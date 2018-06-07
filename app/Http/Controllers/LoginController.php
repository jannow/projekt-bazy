<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Logowanie;
use App\Bilety;
use DB;
use Illuminate\Database\Eloquent\Collection;
use Session;
class LoginController extends Controller
{

  public function uprawnienia(Request $request) {
$Uprawnienia[Uprawnienia_idUprawnienia] = DB::table('logowanie')->get();
}
public function show(Request $request, $id)
{
  $value = $request->session()->get('key');

  //
}
    public function getHome()
    {
        var_dump(session()->all());
        $value = session()->get('key');
        var_dump($value);
        session()->put('test1', '1234bulanda');

        session()->get('test1');










        return view('layout.layout',compact('a'));
    }

    public function getLogin()
    {
        return view('/login');
    }

    public function getZarzadzaj()
    {
        return view('/management');
    }

    public function getMap()
    {
        return view('mapa.map');
    }



      public function getPrice()
   {
     $lista=Bilety::all();
       $ticket=[];
       foreach ($lista as $wart) {
           $ticket[$wart->Rodzaj_biletu]=$wart->Cena_biletu;
       }

       return view('bilety.cennik',compact('ticket'));
   }


    public function postLogin(Request $request)
    {
    	$request->validate([
    		'login' => 'required',
    		'Haslo' => 'required'
    	]);



        /*
        $logins=Logowanie::all();
        $count=0;
        foreach ($logins as $key) {
            echo $key->login.' '. $key->Haslo.'<br>';
        }
        echo '<br><br>';

        echo $request->login .' '. bcrypt($request->Haslo);

*/

    	if (Auth::attempt(["login" => $request->login, "password" => $request->Haslo])) {
          $zmienna=Auth::user();

          $_SESSION['test']='tekst';

    		return redirect()->route('home');

		}
        else
		{
			dd($request);

		}
    }
}

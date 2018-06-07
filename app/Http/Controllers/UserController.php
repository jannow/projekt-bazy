<?php
namespace app\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function show(Request $request, $id)
{
    $value = $request->session()->get('key');

    //
}
  public function getDashboard()
  {
    return view('dashboard');
  }

  public function postSignIn(Request $request)
  {

  }
}

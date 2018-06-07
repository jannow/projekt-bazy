
@extends('layout.layout')
@section('content')

<div class="row">
            <div class="col-md-4">
                <h3>Logowanie</h3>
                <form action="{{route('login')}}" method="post">
                    <div class="form-group">
                    <label for="login"></label>
                    <input type="text" name="login" id="login">
                    </div>
                    <div class="form-group">    
                    <label for="Haslo"></label>
                    <input type="password" name="Haslo" id="haslo">
                    </div>
                    <button type="submit" >Wyślij</button>   
                    <input type="hidden" name="_token" value="{{Session::token()}}">       
                </form>       
            </div>  
    </div> 

@endsection
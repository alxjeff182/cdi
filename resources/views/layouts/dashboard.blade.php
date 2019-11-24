@extends('main')
@section('title', 'Welcome')
    @section('content')
     <div id="app">   
        <user-profile></user-profile>  
        <div class="container mb-5 px-2"> 
              <div class="col-12 mt-5"> 
                <main-content></main-content> 
                <broadcast-message></broadcast-message>
                <footer-setting></footer-setting> 
        </div>            
        </div>
    </div>	 
@endsection 
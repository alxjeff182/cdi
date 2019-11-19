@extends('main')
@section('title', 'Welcome')
    @section('content')
     <div id="app"> 
         <user-profile></user-profile>
         <main-content></main-content>
         <broadcast-message></broadcast-message>
         <footer-setting></footer-setting>
    </div>	 
@endsection
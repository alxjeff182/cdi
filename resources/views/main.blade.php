@include('partials.header')
@include('partials.stylesheet') 
@include('partials.message')
  
  <body @yield('classBody')>     
    <div class="body-container">
      @yield('content')
    </div>
  </body> 

@include('partials.script') 
@if(Session::Has('success'))
<div class="alert alert-success" role="alert">
  <strong>Success :</strong> {{Session::get('success')}}
</div>
@endif

@if(count(@$errors) > 0)
    @foreach ($errors->all() as $error)
    <ul>
         <li>
        <div class="alert alert-danger" role="alert">
        
            <strong>Failed :</strong> {{@$error}}
       
        </div>    
         </li>
    </ul> 
    @endforeach
@endif
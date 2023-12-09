

<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-2">
<a class="navbar-brand" href="/show">DevNest</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/show">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
        </li>
       
        <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
        </li>
    </ul>
    <div class="row mx-2">
        
    @if (session('user'))
  
    <form class="form-inline my-2 my-lg-0">
    
    
   <p class="text-light my-0 mx-2" > Welcome {{session('user')}}
   </p>
   <a href="{{route('logout')}}" class="btn btn-outline-success ml-2">Logout</a>

  </form>
  @else
  <form class="form-inline my-2 my-lg-0">
   
    </form>
      <button class="btn btn-outline-success ml-3"  data-toggle="modal" data-target="#loginModal">Login</button>
   
   <button class="btn btn-outline-success mx-3" data-toggle="modal" data-target="#signupModal">SignUp</button>
</div>
</div>
@endif
</nav>

@include ('partials/_loginModal')
@include ('partials/_signupModal')




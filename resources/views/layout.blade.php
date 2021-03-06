<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<script src="{{asset('js/bootstrap.min.js')}}" ></script>
<script src="{{asset('js/jquary-1.12.1.min.js')}}" ></script>
<script src="{{asset('js/popper.min.js')}}" ></script>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      @guest
        <li class="nav-item active">
        <a class="nav-link" href="{{url('register/')}}">Register <span class="sr-only">(current)</span></a>
      </li>

        <li class="nav-item active">
       <a class="nav-link" href="{{url('login/')}}">LogIn <span class="sr-only">(current)</span></a>

      </li>
     @else
        
     <li class="nav-item">
     	<a  class="nav-link" href="#">{{Auth::user()->name}}</a>
     </li>
     <li class="nav-item">
        <a class="nav-link" href="{{url('products')}}">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('logout/')}}">Log out</a>
      </li>
      @endguest
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>!-->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


</body>
</html>
@yield('content');


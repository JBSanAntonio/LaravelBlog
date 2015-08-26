<ul class="nav navbar-nav navbar-fixed-top">
    @if (Auth::check())
    Hello {{{Auth::user()->first_name}}} {{{Auth::user()->last_name}}}
      <li><a href="{{{action('HomeController@doLogout'}}}">Logout</a></li>
        {{-- <li><a href="{{ url('/auth/register') }}">Register</a></li> --}}
    @else
        <li><a href="{{ url('login') }}">Login</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->email }} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            </ul>
        </li>
    @endif
</ul>



<!-- <div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">Project Name</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
             <ul class="dropdown-menu">
               <li><a href="#">Action</a></li>
               <li><a href="#">Another action</a></li>
               <li><a href="#">Something else here</a></li>
               <li class="divider"></li>
               <li class="nav-header">Nav header</li>
               <li><a href="#">Separated link</a></li>
               <li><a href="#">One more separated link</a></li>
             </ul>
          </li> -->
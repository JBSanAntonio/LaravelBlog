{{-- Navigation --}}

<div class="container">
   <div class="row col-md-12">
        <nav class="nav collapse navbar-collapse navbar navbar-default container-fluid" role="navigation" id="bs-example-navbar-collapse-1">

          <!-- Collect the nav links, forms, and other content for toggling -->
             <ul>
                <li class="active"><a href="{{action("HomeController@showHome") }}">Home</a></li>
                <li><a href="signup">Sign Up</a></li>
                <li class="active"><a href="{{action("PostsController@index") }}">All Posts</a></li>
                <li><a href="{{action("PostsController@create") }}">Add Post</a></li>
                <li><a href="{{action("HomeController@showAboutUs") }}">About</a></li>
            </ul>

{{-- Search form --}}

           <form method="get" action="{{ action('PostsController@index') }}" class="navbar-form navbar-left" role="search">
              <div class="form-group">
                 <input name="search" type="text" class="form-control" placeholder="Search Posts">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
           </form>

          <ul class="nav navbar-nav navbar-right">
              @if (Auth::check())
                {{-- if logged in then log out; else go to login page --}}
                Hello {{{Auth::user()->first_name}}} {{{Auth::user()->last_name}}}
                    <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a></li>
                @else
                    
                
             {{--  <li class="dropdown"> --}}

         <a href="{{ url('login') }}" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
             <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">

                      <li>
                         <div class="row">
                            <div class="col-md-12">
                               <form class="form" role="form" method="post" action="{{ action('HomeController@doLogin') }}" accept-charset="UTF-8" id="login-nav">
                                {{ Form::token() }}
                                  <div class="form-group">
                                     <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                     <input name="email" type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                  </div>
                                  <div class="form-group">
                                     <label class="sr-only" for="exampleInputPassword2">Password</label>
                                     <input name="password" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox"> Remember me
                                     </label>
                                  </div>
                                  <div class="form-group">
                                     <button type="submit" class="btn navbar-btn btn-success btn-block">Log in</button>
                                  </div>
                               </form>
                            </div>
                         </div>
                      </li>
              </ul>
              @endif

                      {{-- <li class="divider"></li>
                      <li>
                         <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
                         <input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
                      </li> --}}
             
          </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>

 {{-- <li class="dropdown">
                   <a href="http://www.jquery2dotnet.com" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                   <ul class="dropdown-menu">
                      <li><a href="http://www.jquery2dotnet.com">Action</a></li>
                      <li><a href="http://www.jquery2dotnet.com">Another action</a></li>
                      <li><a href="http://www.jquery2dotnet.com">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="http://www.jquery2dotnet.com">Separated link</a></li>
                      <li class="divider"></li>
                      <li><a href="http://www.jquery2dotnet.com">One more separated link</a></li> --}}
               {{--  </li>
             </ul> --}}





{{-- Navigation --}}

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<div class="container">
   <div class="row col-md-12">
        <nav class="navbar navbar-default container-fluid" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             </button>
           </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="{{action("HomeController@showLaunch") }}">Home</a></li>
                  <li class="active"><a href="{{action("HomeController@showResume") }}">The RESUME</a></li>
                  <li><a href="{{action("HomeController@showPortfolioTwo") }}">The PORTFOLIO</a></li>
              </ul>
<script>
    $('.dropdown-toggle').dropdown()
</script>
          <ul class="nav navbar-nav navbar-right">
       
                    
                
              <li class="dropdown">

         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
             <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">

                      <li>
                         <div class="row">
                            <div class="col-md-12">
                              <a href="http://wannaplay.site">View Group Capstone Project</a><br>
                              <a href="{{action("HomeController@showHome") }}">Demo CMS Travel Blog Project</a><br>
                               <a href="{{action("HomeController@showWineseller") }}">View Website Project Homepage</a><br>
                               <a href="http://venueandvine.com">Visit Personal Wine Blog</a><br>
                               <a href = "http://trendlookout.com">View Trends Site<em> (in progress)</em></a><br>
                               <a href="{{action("HomeController@showSimon") }}">Demo Simple Simon</a><br>
                               <a href="{{action("HomeController@showCalculator") }}">Demo JavaScript Calculator</a>

                            </div>
                         </div>
                      </li>
              </ul>
             
          </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>






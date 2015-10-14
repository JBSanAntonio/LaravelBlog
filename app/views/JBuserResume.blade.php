@extends('layouts.resume-portfolio-master')

@section('title')
    <title>Resume</title>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  
    <link rel="stylesheet" type = "text/css" href="/css/resumePortfolio.css">
@stop

@section('content')
  	<div class="resumeBody">

	<div row class="container-fluid row nameAddress">

		<div class = "col-md-3 logo"><img src="img/logo.png"/></div>
    		
    	<div class = "col-md-8 address"><h1>Julie Buser</h1><p></p>107 Longsford, San Antonio, Texas 78209<p></p>(210) 240-8265<p></p>jbuser2013@gmail.com</div>
    </div>
    

		<h2>Technical Skills</h2>
    <div id="container" class="container-fluid">
			<div class = "row">
				<div class = "col-md-6">
				<ul>
				    <li>Linux | nginx | MySQL | PHP | MVC | AJAX | Laravel</li>
				    <p></p>
				    <li>Javascript | jQuery | Github | Twitter Bootstrap</li>
				    <p></p>
				    <li>Vagrant Environment | Sublime Editor | Bash | APIs</li>
				</ul>
				</div>
				<div class = "col-md-6">
					<ul>
				    <li>HTML5 | CSS | SASS | AngularJS
				    	</li>
				    <p></p>
				    <li>Wordpress | Adobe Creative Cloud | Logo in Photoshop</li>
				    <p></p>
				    <li>Google Analytics | Salesforce |  Microsoft Office Suite</li>
					</ul>
				</div>
			</div>	
	</div>

	<section class="webDevProjects">
		<h2>Web Development Projects</h2>
		<h5>
View The
<a href="{{{ action('HomeController@showPortfolio') }}}">PORTFOLIO</a>
</h5>
			<ul><a link href = "https://github.com/JBSanAntonio">Coding Projects on Github Under JBSanAntonio</a></ul>
		<p></p>
	</section>

	<div id="container" class="container-fluid">
	<div row>
		<div class = "col-md-6">
		<dl class="dl-horizontal">
		  <dt>MVC Website:</dt>
		  <dd>Model-view-controller (MVC) Create, Read, Update, and Delete (CRUD) team project using PHP, MySQL, jQuery, JS, HTML5, CSS3, Laravel 4.2</a> | <a href="http://wannaplay.site"></dd>
		  <p></p>
		  <dt>CMS Blogsite:</dt>
		  <dd>Model-view-controller (MVC) project using Laravel, PHP, MySQL, JS, jQuery, HTML, and CSS | <a href="{{action("HomeController@showHome") }}">Demo Vagabondtrip.com Travel Blog</a></dd>
		  <p></p>
		  <dt>MVC Website:</dt>
		  <dd>Model-view-controller (MVC) team project using PHP, MySQL, HTML, CSS, and Github version control | <a href="{{action("HomeController@showWineseller") }}">Homepage for Wineseller Website</a></dd>
		  <p></p>
		  <dt>Calculator:</dt>
		  <dd>Online calculator programmed in Javascript and styled after Mac calculator using HTML5 and CSS |
		 <a href="{{action("HomeController@showCalculator") }}">Demo JavaScript Calculator</a>
		</div>

		<div class = "col-md-6">
		<dl class="dl-horizontal">
 		  <dt>Wordpress Sites:</dt>
		  <dd><a href="http://venueandvine.com">Personal Wine Blog</a></dd>
		  <dd><a href = "http://belenasalon.wordpress.com">Client Site<em> (in development)</em></a></dd>
		  <dd><a href = "http://trendlookout.com">Trends Site<em> (in development)</em></a></dd>
		<p></p>
		<dt>API Ajax Project</dt>
		  <dd>OpenWeatherMap & GoogleMaps API Project:
		  <a href="{{action("HomeController@showWeatherAPI") }}">San Antonio Weather</a></dd>
		  <p></p>
		<dt>Web Games:</dt>
		  <dd>Simple Simon game and Whack-a-mole variant using HTML, CSS, Javascript, and JQuery
		  <a href="{{action("HomeController@showSimon") }}">Demo Simple Simon Game</a> |
		  <a href = "https://github.com/JBSanAntonio/SimpleSimon.dev/blob/master/public/simple.html"><em>Simple Simon .html file on Github</em></a> |
		  <em><a href = "https://github.com/JBSanAntonio/SimpleSimon.dev/blob/master/public/simple.css">Simple Simon .css file on Github</em></a></dd>
		  <p></p>
		</dl>
		</div>

	</div>
	</div>
	
	<div id="container" class="container-fluid">
		<h2>Education and Training</h2>
			<ul class = "education">
				<li>June 2015 - present, Codeup Full Stack Web Development Bootcamp, San Antonio, TX</li>
				<li><em>(In Progress)</em> MBA, Texas A&M San Antonio, San Antonio, TX</li>
				<li>JD,	University of Maryland School of Law, Baltimore, MD</li>
				<li>MA, Political Science, University of Michigan, Ann Arbor, MI</li>
				<li>BA, Russian and East European Studies, University of Michigan, Ann Arbor, MI</li>
			</ul>	
	</div>

    <div id="container" class="container-fluid">
     	<h2>Professional Skills</h2>
			<div class ="row">
				<div class = "col-md-4">
					<h5>Strategic Marketing & <br>Communications</h5> 
					<ul>
						<li>Writing and editing for corporate websites, social media, briefs, broadcast/print media, speeches, and proposals </li>
						<p></p>
						<li>Key contributor to rebranding, logo redesign, website overhaul and campaign launch; collaborated with IT Director, web dev and design firms, and global PR/marketing firm</li>
						<p></p>
						<li>Market trends research, analyzed marketing strategy, presentation skills, and project collaboration</li> 
					</ul>
				</div>
				<div class = "col-md-4">
				<h5>Social Media Marketing <br>Campaigns and Promotion</h5>
					<ul>
						<li>Publish WordPress blog | integrated with social media sites</li>
						<p></p>
						<li>Email marketing, survey, lead generation, and content creation sites, including SurveyMonkey, Mailchimp, Hootsuite, and IFTTT</li>
						<p></p>
						<li>Met deadlines, developed marketing budget, and evaluated ROI</li>
					</ul>
				</div>

				<div class = "col-md-4">
			<p></p>
				<h5>Program Management & <br>Business Development</h5> 
					<ul>
						<li>Earned $1 billion total revenue in federal contracts as lead Business Development/Proposal Director</li>
						<p></p>
						<li>Established teaming relationships with Fortune 500/mid/small firms | extensive b2b networking</li>
						<p></p>
						<li>Met deliverables on-time/under-budget as Assistant Program Manager of Army Global Pharmacy Study; assembled team, developed project plan, distributed survey globally, and delivered results to Army Pharmacy Consultant</li>
					</ul>
				</div>
			</div>
    </div>
	
	<div id="container" class="container-fluid">
		<h2 class = "Jobs">Employment History</h2>	
			<ul>
				<li>June 2014-May 2015 | Business Development Director, Cherokee Nation Businesses, San Antonio, TX</li>
				<li>2009-April 2014	| Strategic Marketing VP/SVP; VP Business Development, InGenesis, San Antonio, TX</li>
				<li>2007-2008 |	Proposal Director/Writer, InGenesis, San Antonio, TX</li>
				<li>1997-2006 |	Freelance Writer, School Volunteer,	Waco, TX and San Antonio, TX</li>
				<li>1994-96 |	Lexis/Nexis Information Consultant, Reed Elsevier, Miamisburg, OH</li>
				<li>1992-94 |	Lexis/Nexis Business Information Specialist,	Mead Data Central, Miamisburg, OH</li>
				<li>1990-91 |	US Army Judge Advocate General Intern,	Walter Reed Army Medical Center, DC and Army Claims Service, Ft. Meade, MD</li>
				<li>1989 |	International Security Policy Analyst, 	Office of the Secretary of Defense, Pentagon, DC</li>
				<li>1988 |	Survey Research Assistant,	Survey Research Center, University of MI, Ann Arbor, MI</li>
			</ul>
	</div>

	<div id="container" class="container-fluid">
		<h2 class = "misc">Certifications & Other</h2>	
			<ul>
				<li>San Antonio Online Marketing Group Member</li>
				<li>Senior Professional in Human Resources (SPHR)</li> 
				<li>Top 10 US College Woman Award | Harry S. Truman Scholarship (Julie Ann Wyoral)</li>
				<li>Circumnavigator Club Foundation Grantee - traveled to Somalia, Pakistan, Thailand, Hong Kong, and the Philippines to study the world refugee situation</li>
				<li>European Cultural History Program; travel-study in USSR, Middle East, and Europe</li>
			</ul>
	</div>

  	</div>
@stop
  </body>
</html>


<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Tisa Admin Template v1.1 (dashboard)</title>
		<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
		
		<link rel="shortcut icon" href="favicon.ico" />
		
		<!-- bootstrap framework -->
                {{ HTML::style('css/bootstrap.min.css') }}
				
		<!-- custom icons -->
			<!-- font awesome icons -->
                        {{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') }}
			<!-- ionicons -->	
	                {{ HTML::style('http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css') }}		
           
			
				
	
	<!-- page specific stylesheets -->

		
		<!-- main stylesheet -->
                 {{ HTML::style('css/style.css') }}	
		<!-- google webfonts -->
                 {{ HTML::style('http://fonts.googleapis.com/css?family=Source+Sans+Pro:400&amp;subset=latin-ext,latin') }}	 		

		
				
    </head>
    <body>
		<!-- top bar -->
		<header class="navbar navbar-fixed-top" role="banner">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="dashboard.html" class="navbar-brand">{{ HTML::image('images/blank.gif') }}</a>
				</div>
				
				<ul class="nav navbar-nav navbar-right">
					<li class="user_menu">
						<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="navbar_el_icon ion-person"></span> <span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="login_page.html">Log Out</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</header>
		
		@yield('content')

		<!-- side navigation -->
		<nav id="side_nav">
			<ul>
				<li>
			       <a href="{{ URL::route('home', null) }}"><span class="ion-speedometer"></span> <span class="nav_title">Dashboard</span></a>
				</li>
        <li>
					<a href="#">
						<span class="ion-cash"></span>
						<span class="nav_title">Financieel</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<h4 class="panel_heading panel_heading_first">Instellingen</h4>
							<ul>
								<li><a href="{{ URL::route('abbonementen.create', null) }} "><span class="side_icon ion-plus"></span> Niewe Abbonementen</a></li>
							</ul>
            </div>
         </div>
			</ul>
		</nav>

		
	

		<!-- jQuery -->
		{{ HTML::script("js/jquery.min.js") }}
                <!-- easing -->
		{{ HTML::script("js/jquery.easing.1.3.min.js") }}
               	<!-- bootstrap js plugins -->
		{{ HTML::script("js/bootstrap.min.js") }}
                <!-- top dropdown navigation -->
		{{ HTML::script("js/tinynav.js") }}
               			
		<!-- common functions -->
                {{ HTML::script("js/tisa_common.js") }}
			
		<!-- page specific plugins -->

				<!-- dashboard functions -->
                {{ HTML::script("js/tisa_dashboard.js") }}
		
	

    </body>
</html>



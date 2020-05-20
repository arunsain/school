
<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Pathshala - A Temple Of Learning</title>

        <!-- Styles -->
        <link href="{{ asset('frontcss/assets/css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('frontcss/assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('frontcss/assets/css/owl.carousel.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('frontcss/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('frontcss/assets/css/style.css') }}" rel="stylesheet" media="screen">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="{{ asset('frontcss/assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" media="screen">


    </head>
    <body>
        <div class="row nav-row trans-menu">
            <div class="container nav-container">
				<div class="top-navbar">
					<div class = "pull-right">
						<div class="top-nav-social pull-left">
								<a href="{{ $contentdata->fbLink }}"><i class="fa fa-facebook"></i></a>
								<a href="{{ $contentdata->twitLink }}"><i class="fa fa-twitter"></i></a>
								<a href="{{ $contentdata->gPlusLink }}"><i class="fa fa-google-plus"></i></a>
								<a href="{{ $contentdata->lkdLink }}"><i class="fa fa-linkedin"></i></a>
						</div>
					<!-- 	<div class="top-nav-login-btn pull-right">
							<a href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in"></i>LOGIN</a>
						</div> -->
						<!--<div class="top-navbar-search pull-right">
							<i class="fa fa-search"></i>
							<input type = "text" placeholder = "Search"/>
						</div>-->
					</div>
					<div class = "clearfix"></div>
				</div> 
				<div class = "clearfix"></div>
                <nav id="pathshalaNavbar" class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#pathshalaNavbarCollapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ route('/')}}">PATHSHALA</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="pathshalaNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('/')}}"><i class="fa fa-home"></i>HOME</a></li>
						<!-- 	<li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-graduation-cap"></i>ACADEMICS <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="academic.html"><i class="fa fa-certificate"></i>UPPER</a></li>
                                    <li><a href="academic.html"><i class="fa fa-child"></i>MIDDLE</a></li>
									<li><a href="academic.html"><i class="fa fa-puzzle-piece"></i>LOWER</a></li>
									<li><a href="preschool.html"><i class="fa fa-cube"></i>PRESCHOOL</a></li>
                                </ul>
                            </li> -->
                            <li><a href="{{ route('admission') }}"><i class="fa fa-users"></i>ADMISSIONS</a></li>
							<li>
                                 <!-- class="dropdown" -->
                                <a href="{{ route('events', ['cat_id'=>'all']) }}"><i class="fa fa-calendar-check-o"></i>EVENTS <!-- <b class="caret"></b> --></a>
                             <!--     data-toggle="dropdown" class="dropdown-toggle" -->
                               <!--  <ul class="dropdown-menu">
                                    <li><a href="{{ route('events', ['cat_id'=>'all']) }}"><i class="fa fa-calendar"></i>EVENTS</a></li>
                                    <li><a href="event-single.html"><i class="fa fa-calendar-o"></i>EVENT SINGLE</a></li>
                                </ul> -->

                            </li>
                            <li><a href="{{ route('gallery') }}"><i class="fa fa-picture-o"></i>CAMPUS GALLERY <!-- <b class="caret"></b> --></a></li>
                              <li><a href="{{ route('contact') }}"><i class="fa fa-phone-square"></i>CONTACT US <!-- <b class="caret"></b> --></a></li>
                                <li><a href="{{ route('about') }}"><i class="fa fa-info-circle"></i>ABOUT US <!-- <b class="caret"></b> --></a></li>
							<li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-dashboard"></i>Login <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('admin.login') }}"><i class="fa fa-user-secret"></i>ADMIN</a></li>
									<li><a href="{{ route('login') }}"><i class="fa fa-user"></i>TEACHER</a></li>
                                    <li><a href="{{ route('student.login') }}"><i class="fa fa-child"></i>STUDENT</a></li>
                                </ul>
                            </li>
							<!-- <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-file"></i>PAGES <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('gallery') }}"><i class="fa fa-picture-o"></i>CAMPUS GALLERY</a></li>
									<li><a href="#"><i class="fa fa-info-circle"></i>ABOUT</a></li>
                                    <li><a href="#"><i class="fa fa-phone-square"></i>CONTACT US</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
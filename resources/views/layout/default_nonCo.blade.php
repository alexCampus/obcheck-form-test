
<html lang="fr">
<head>
<meta charset="utf-8" />
	<title>obcheck - @yield('title')</title>

	<!--meta-->
	<meta name="viewport" content="width=device-width" />
	<meta name="description" content="Réseau social obcheck">
	<meta name="author" content="Team 404 Not Found">

	<!--meta comptabilité IE-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!---favicon-->
	<link rel="icon" href="favicon.ico" />

	<link rel="stylesheet" type="text/css" href="/css/normalize.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="/css/bootstrap-theme.min.css">



	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	@yield("link")
</head>
<body>
	<div class="container-fluid">
	
		<header>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-2">
					<a href="accueil_connecte.html"><img src="/images/logo_simple_v3.png" alt="logo_obcheck" class="logo"></a>					
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-7">
					<h1>obcheck<br><small>Mélange et partage tes Hobbies</small></h1>					
				</div>
				@yield("btn_login")
				@yield("dropdown_user")

			</div>
			
				@yield("navbar")
			
	   	    <div class="clear"></div>
	    </header>
		
	   	    @yield('content')
		

		<footer class="footer">
			<div class="row">
				<a class="btn btn-social-icon btn-twitter">
    				<span class="fa fa-twitter fa-2x"></span>
  				</a>
  				<a class="btn btn-social-icon btn-facebook">
    				<span class="fa fa-facebook fa-2x"></span>
  				</a>
  				<a class="btn btn-social-icon btn-google">
    				<span class="fa fa-google fa-2x"></span>
  				</a>
			</div>
			<div class="row">
				<div class="col-lg-offset-1 col-lg-4">
					<ul>
						<li><a href="about.html">A Propos de Nous</a></li>
						<li><a href="faq.html">FAQ</a></li>
					</ul>
				</div>
				<div class="col-lg-offset-2 col-lg-4">

					<ul>
						<li><a href="cgu.html">C.G.U.</a></li>
						<li><a href="contact.html">Nous Contacter</a></li>
					</ul>
				</div>
			</div>      		
    	</footer>
	</div>
<!--Jquery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/5c9836a0c6.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	@yield('scripts')
</body>
	

</html>
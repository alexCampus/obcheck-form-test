<!-- Fixed nav bar -->
			<nav class="navbar navbar-default navbar-fixed-top">
		      <div class="container-fluid" id="container_nav_bar">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a href="accueil_connecte.html"><img src="images/logo_simple_v3.png" alt="logo_obcheck" class="logo"></a>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav">
		            <li class="active"><a href="#">Accueil</a></li>
		            <li><a href="#about">Messagerie</a></li>
		            <li><a href="#contact">Créer un événement</a></li>
		          </ul>
		          <ul class="nav navbar-nav navbar-right">
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon profil <span class="caret"></span></a>
		              <ul class="dropdown-menu">
				    	<li><a href="user_profil.html">Mon profil</a></li>
				    	<li><a href="user_events.html">Mes événements</a></li>
				    	<li><a href="user_historique.html">Mon historique</a></li>
				    	<li><a href="user_friends.html">Mes amis</a></li>
				    	<li><a href="create_event.html">Nouvel évènement</a></li>
				  	</ul>
		            </li>
		          </ul>
		        </div><!--/.nav-collapse -->
		      </div>
		    </nav><!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="utf-8" />
	<title>obcheck</title>

	<!--meta-->
	<meta name="viewport" content="width=device-width" />
	<meta name="description" content="Réseau social obcheck">
	<meta name="author" content="Team 404 Not Found">

	<!--meta comptabilité IE-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!---favicon-->
	<link rel="icon" href="favicon.ico" />

	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">


	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>
	<div class="container-fluid">
	<div class="fil_ariane">
		<ul class="nav nav-pills">
			<li><a href="index.html">Accueil non connecté</a></li>
			<li><a href="connexion.html">Connexion</a></li>
			<li><a href="accueil_connecte.html">Accueil connecté</a></li>
			<li><a href="user_profil.html">Mon profil</a></li>
			<li><a href="info_user.html">Modifier mon profil</a></li>
			<li><a href="user_events.html">Mes événements</a></li>
			<li><a href="user_historique.html">Mon historique</a></li>
			<li><a href="user_friends.html">Mes amis</a></li>			
			<li><a href="create_event.html">Nouvel événement</a></li>			
			<li><a href="update_event.html">Modification événement</a></li>
			<li><a href="user_messaging.html">Messagerie</a></li>
			<li><a href="visit_friends.html">Page profil Ami</a></li>
			<li><a href="visit_user_event.html">Page d'événements</a></li>
			<li><a href="about.html">A Propos de Nous</a></li>
			<li><a href="cgu.html">CGU</a></li>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="admin_page_events.html">Admin page événements</a></li>
			<li><a href="admin_page_posts.html">Admin page posts</a></li>
			<li class="active">Admin page tags</li>
		</ul>	
	</div>
		<header>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-2">
					<a href="accueil_connecte.html"><img src="images/logo_simple_v3.png" alt="logo_obcheck" class="logo"></a>					
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-7">
					<h1>obcheck<br><small>Mélange et partage tes Hobbies</small></h1>					
				</div>
				
				
				<!-- dropdown Avatar -->
				<div class="avatar col-lg-2 col-md-2 col-sm-2 col-xs-2 btn-group">
				  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <img src="images/shaker.jpg" class="img-responsive header_avatar" alt="photo_avatar"> <span class="caret"></span>
				  	</button>
				  	<ul class="dropdown-menu">
				    	<li><a href="user_profil.html">Mon profil</a></li>
				    	<li><a href="user_events.html">Mes événements</a></li>
				    	<li><a href="user_historique.html">Mon historique</a></li>
				    	<li><a href="user_friends.html">Mes amis</a></li>
				  	</ul>
				  	<span class="glyphicon glyphicon-globe notif" aria-hidden="true"><a href="#">Notifications</a></span>
					<span class="glyphicon glyphicon-envelope notif" aria-hidden="true"><a href="user_messaging.html">Messages</a></span>
					<a href="index.html" class="btn btn-default btn-logout" role="button">Se déconnecter</a>
				</div>
			</div>

			
	   	    <div class="clear"></div>
	    </header>
   
		<div class="row">
	    	<div class="col-lg-offset-3 col-lg-7 col-md-8 col-sm-12 col-xs-12">
	    		<div class="bloc_fil_actu">
		    		<h1>Admin Page</h1>
		    		<ul class="nav nav-tabs">
						<li role="presentation" class="active"><a href="admin_page_tags.html">Historique des Tags</a></li>
						<li role="presentation"><a href="admin_page_posts.html">Posts ayant été signalés</a></li>
						<li role="presentation"><a href="admin_page_events.html">Historique des événements</a></li>
					</ul>
					<div class="col-lg-offset-3">
						<div class="button_tag-admin">
							<p>#musique <button class="btn btn-xs btn-danger pull-right ">Supprimer et envoyer un message à l'utilisateur concerné</button></p>
							<p>#jeux vidéo <button class="btn btn-xs btn-danger pull-right ">Supprimer et envoyer un message à l'utilisateur concerné</button></p>
							<p>#Nature <button class="btn btn-xs btn-danger pull-right " >Supprimer et envoyer un message à l'utilisateur concerné</button></p>
							<p>#kayak <button class="btn btn-xs btn-danger pull-right ">Supprimer et envoyer un message à l'utilisateur concerné</button></p>
							<p>#cuisine <button class="btn btn-xs btn-danger pull-right">Supprimer et envoyer un message à l'utilisateur concerné</button></p>			    			
		    			</div>  	
		    		</div>
		    	</div>
	    	</div>
	    </div>


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
</body>
	


</html>
@extends('layouts.default')
	
	@section('dropdown_profil')
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
			    	<li><a href="create_event.html">Nouvel évènement</a></li>
			  	</ul>
			  	<span class="glyphicon glyphicon-globe notif" aria-hidden="true"><a href="#">Notifications</a></span>
				<span class="glyphicon glyphicon-envelope notif" aria-hidden="true"><a href="user_messaging.html">Messages</a></span>
				<a href="index.html" class="btn btn-default btn-logout" role="button">Se déconnecter</a>
			</div>
		
	@endsection

	@section('navbar')
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
			            <li class="active"><a href="accueil_connecte.html">Accueil</a></li>
			            <li><a href="user_messaging.html">Messagerie</a></li>
			            <li><a href="create_event.html">Créer un événement</a></li>
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
			    </nav>
				
		   	    <div class="clear"></div>
	@endsection
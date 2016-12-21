@extends('layout.default_co')
@section('title','amis')

		
@section('content')	   
		<div class="row">
    		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    			<div class=" widget">
					<h3>Ma Page</h3>
					<img src="images/shaker.jpg" class="img-responsive center-block" alt="Ma photo">
					<div class="pseudo_widget">
						<p> Pseudo: Shaker</p>
					</div>
				</div>
			</div>
    		<div class="col-lg-7 col-md-10 col-sm-10">
    			<div class="row">
		    		<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-3 col-lg-10 col-md-8 col-sm-11 col-xs-12">
		    			<ul class="nav nav-tabs">
						  	<li role="presentation"><a href="user_profil.html">Mon profil</a></li>
						  	<li role="presentation"><a href="user_events.html">Mes événements</a></li>
						  	<li role="presentation"><a href="user_historique.html">Mon historique</a></li>
						  	<li role="presentation" class="active"><a href="user_friends.html">Mes amis</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
    			<div class=" bloc_fil_actu padding_1">
	    			<div class="row">
	    				<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post">
							<div class="col-lg-12 search_bar">
					    		<div class="input-group">
						      		<span class="input-group-btn">
						        		<button class="btn btn-default " type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
						      		</span>
				     				<input type="text" class="form-control formulaire_userfriends" placeholder="Recherche..." onblur="verifSearchBar(this)">
				     				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Rajouter un ami</button>
								</div>
				    		</div>
				    	</form>	
	    			</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 align_bouton_friends">
						<div class="dropdown">
							<a href="visit_friends.html">Merlin</a>
							<div>
							  	<button type="button" class="btn btn-ami dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    	<img src="images/merlin.jpg" class="img-responsive avatar_user_friends" alt="photo_avatar"> <span class="caret"></span>
							  	</button>
							  	<ul class="dropdown-menu notif">
							  		<li><a href="visit_friends.html">Accéder à son historique</a></li>
							    	<li><input type="checkbox" value="" class="checkbox_hobby_widget">Suivre les actus</li>
							    	<li><input type="checkbox" value="" class="checkbox_hobby_widget">Voir les événements</li>
							    	<li><a href="#">Retirer de la liste d'amis</a></li>
							  	</ul>
							</div>
						</div>
					</div>						 
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 align_bouton_friends">	
						<div class="dropdown">
							<a href="visit_friends.html">Chaton</a>
							<div>
							  	<button type="button" class="btn btn-ami dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    	<img src="images/chaton.jpg" class="img-responsive avatar_user_friends" alt="photo_avatar"> <span class="caret"></span>
							  	</button>
							  	<ul class="dropdown-menu">
							  		<li><a href="visit_friends.html">Accéder à son historique</a></li>
							    	<li><input type="checkbox" value="" class="checkbox_hobby_widget">Suivre les actus</li>
							    	<li><input type="checkbox" value="" class="checkbox_hobby_widget">Voir les événements</li>
							    	<li><a href="#">Retirer de la liste d'amis</a></li>
							  	</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 align_bouton_friends">
						<div class="dropdown">
							<a href="visit_friends.html">Hobby</a>
							<div>
							  	<button type="button" class="btn btn-ami dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    	<img src="images/chien.jpg" class="img-responsive avatar_user_friends" alt="photo_avatar"> <span class="caret"></span>
							  	</button>
							  	<ul class="dropdown-menu">
							  		<li><a href="visit_friends.html">Accéder à son historique</a></li>
							    	<li><input type="checkbox" value="" class="checkbox_hobby_widget">Suivre les actus</li>
							    	<li><input type="checkbox" value="" class="checkbox_hobby_widget">Voir les événements</li>
							    	<li><a href="#">Retirer de la liste d'amis</a></li>
							  	</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 align_bouton_friends">
						<div class="dropdown">
							<a href="visit_friends.html">Ema</a>
							<div>
							  	<button type="button" class="btn btn-ami dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    	<img src="images/chien.jpg" class="img-responsive avatar_user_friends" alt="photo_avatar"> <span class="caret"></span>
							  	</button>
							  	<ul class="dropdown-menu">
							  		<li><a href="visit_friends.html">Accéder à son historique</a></li>
							    	<li><input type="checkbox" value="" class="checkbox_hobby_widget">Suivre les actus</li>
							    	<li><input type="checkbox" value="" class="checkbox_hobby_widget">Voir les événements</li>
							    	<li><a href="#">Retirer de la liste d'amis</a></li>
							  	</ul>
							</div>
						</div>
					</div>
					<div class="clear"></div>
	    		</div>
	    	</div>
    		<div class="col-lg-3 col-md-3 col-sm-5 pub_widget">
    			<img src="images/pub3.jpg" alt="publicités">
    		</div>
	    </div>
@endsection

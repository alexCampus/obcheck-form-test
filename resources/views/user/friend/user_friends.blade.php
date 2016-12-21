@extends('layout.default_user')
@section('title','amis')

@section('friendClass')
	{{$classActive}}
@endsection
*		
@section('user_content')	   
		
	<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
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
					<a href="/amis/merlin">Merlin</a>
					<div>
					  	<button type="button" class="btn btn-ami dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    	<img src="/images/merlin.jpg" class="img-responsive avatar_user_friends" alt="photo_avatar"> <span class="caret"></span>
					  	</button>
					  	<ul class="dropdown-menu notif">
					  		<li><a href="/amis/merlin">Accéder à son historique</a></li>
					    	<li><input type="checkbox" value="" class="checkbox_hobby_widget">Suivre les actus</li>
					    	<li><input type="checkbox" value="" class="checkbox_hobby_widget">Voir les événements</li>
					    	<li><a href="#">Retirer de la liste d'amis</a></li>
					  	</ul>
					</div>
				</div>
			</div>						 
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 align_bouton_friends">	
				<div class="dropdown">
					<a href="/amis/merlin">Chaton</a>
					<div>
					  	<button type="button" class="btn btn-ami dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    	<img src="/images/chaton.jpg" class="img-responsive avatar_user_friends" alt="photo_avatar"> <span class="caret"></span>
					  	</button>
					  	<ul class="dropdown-menu">
					  		<li><a href="/amis/merlin">Accéder à son historique</a></li>
					    	<li><input type="checkbox" value="" class="checkbox_hobby_widget">Suivre les actus</li>
					    	<li><input type="checkbox" value="" class="checkbox_hobby_widget">Voir les événements</li>
					    	<li><a href="#">Retirer de la liste d'amis</a></li>
					  	</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 align_bouton_friends">
				<div class="dropdown">
					<a href="/amis/merlin">Hobby</a>
					<div>
					  	<button type="button" class="btn btn-ami dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    	<img src="/images/chien.jpg" class="img-responsive avatar_user_friends" alt="photo_avatar"> <span class="caret"></span>
					  	</button>
					  	<ul class="dropdown-menu">
					  		<li><a href="/amis/merlin">Accéder à son historique</a></li>
					    	<li><input type="checkbox" value="" class="checkbox_hobby_widget">Suivre les actus</li>
					    	<li><input type="checkbox" value="" class="checkbox_hobby_widget">Voir les événements</li>
					    	<li><a href="#">Retirer de la liste d'amis</a></li>
					  	</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 align_bouton_friends">
				<div class="dropdown">
					<a href="/amis/merlin">Ema</a>
					<div>
					  	<button type="button" class="btn btn-ami dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    	<img src="/images/chien.jpg" class="img-responsive avatar_user_friends" alt="photo_avatar"> <span class="caret"></span>
					  	</button>
					  	<ul class="dropdown-menu">
					  		<li><a href="/amis/merlin">Accéder à son historique</a></li>
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
    		  
@endsection

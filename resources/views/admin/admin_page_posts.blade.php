@extends('layout.default_co')

@section('title', 'admin_post')
	
@section('content')   
		<div class="row">
	    	<div class="col-lg-offset-3 col-lg-7 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
	    		<div class="bloc_fil_actu">
		    		<h1>Admin Page</h1>
		    		<ul class="nav nav-tabs">
						<li role="presentation"><a href="admin_page_tags.html">Historique des Tags</a></li>
						<li role="presentation"  class="active"><a href="admin_page_posts.html">Posts ayant été signalés</a></li>
						<li role="presentation"><a href="admin_page_events.html">Historique des événements</a></li>
					</ul>
					<div class="col-lg-offset-3">
						<ul>
							<li><h3>Rageux du 38  : </h3>hey les gars ,etroit d'esprit ,Je tiens des propos homophobe
							<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
							<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>
							<li><h3>Haineux du 83: </h3>salut je tiens des propos raciste et deballe toute un com haineux
							<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
							<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>
							<li><h3>Pervers du 78: </h3> coucou je suis un relou et partage un com a caractère pornographique.
							<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
							<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>
							<li><h3>Spam du 14 : </h3> hey coucou tout le monde je suis un spam et j'innonde le mur de com douteux 
							<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
							<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>
							<li><h3>Supporter de l'Om: </h3>allez l'OM les gars
							<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
							<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>

						</ul>
					</div>
				</div>			    						    			
	    	</div>  	
	    </div>

@endsection
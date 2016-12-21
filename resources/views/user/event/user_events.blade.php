@extends('layout.default_co')
@section('title','evenements')

@section('content')
		<div class="row">	    	
    		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    			<div class="widget">
    				<h3>Ma Page</h3>
    				<img src="images/shaker.jpg" class="img-responsive center-block" alt="ma_photo">
    			<div class="pseudo_widget">
    				<p> Pseudo: Shaker</p>
    			</div>
    			</div>
			</div>
    		<div class="col-lg-7 col-md-10 col-sm-10">
				<div class="row">
		    		<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-3 col-lg-9 col-md-9 col-sm-11 col-xs-12">
		    			<ul class="nav nav-tabs">
						  	<li role="presentation"><a href="user_profil.html">Mon profil</a></li>
						  	<li role="presentation"  class="active"><a href="user_events.html">Mes événements</a></li>
						  	<li role="presentation"><a href="user_historique.html">Mon historique</a></li>
						  	<li role="presentation"><a href="user_friends.html">Mes amis</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-7 col-md-9 col-sm-12 col-xs-12">	
				<div class="bloc_fil_actu">
					<div class="col-lg-9 col-md-9 col-sm-12">
						<h2>Mes événements</h2>
						<div class="modifier_event">
							<p>Concert sugar
							<a class="btn btn-default btn-xs pull-right" href="#">Supprimer</a>
						</div>
						<div class="modifier_event">	
							<p>Picnik Kayak
							<a class="btn btn-default btn-xs pull-right" href="#">Supprimer</a>
						</div>
						<div class="modifier_event">
							<p>Rencontre gamer
							<a class="btn btn-default btn-xs pull-right" href="#">Supprimer</a>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12">
							<p><a href="create_event.html" class="btn btn-default btn-lg active" role="button" aria-pressed="true">Créer un événement</a></p>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12">
							<h2>Je Participe</h2>
							<ol>
								<li><a href="visit_user_event.html">Festival Avignon</a></li>
								<li><a href="visit_user_event.html">Rando Vercors</a></li>
								<li><a href="visit_user_event.html">Vernissage Lisa</a></li>
							</ol>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
    		<div class="col-lg-3 col-md-3 col-sm-5 pub_widget">
    			<img src="images/pub2.jpg" alt="publicités">
    		</div>
	    		
	    </div>
@endsection

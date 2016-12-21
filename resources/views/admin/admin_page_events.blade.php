@extends('layout.default_co')

@section('title', 'admin-event')

	

		
@section('content')   
<div class="row">
	<div class="col-lg-offset-3 col-lg-7 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">	  
		<div class="bloc_fil_actu">  		
    		<h2>Admin Page</h2>
    		<ul class="nav nav-tabs">
				<li role="presentation"><a href="admin_page_tags.html">Historique des Tags</a></li>
				<li role="presentation"><a href="admin_page_posts.html">Posts ayant été signalés</a></li>
				<li role="presentation"   class="active"><a href="admin_page_events.html">Historique des événements</a></li>
			</ul>				
			<div class="col-lg-offset-3">
				<ul>
					<li><h3>Vive la haine : </h3>  rassemblement haineux organisé par Rageux du 38
					le 03 decembre 2016 à lyon
					<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
					<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>
					<li><h3>Invit porno : </h3>Rejoignons nous pour des choses legalement punissables au bois des tordu le 06/12/2016
					<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
					<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>
					<li><h3>Réunion tupperware : </h3> Rendez vous autour d'un café pour une reunion sympa le 02/02/2017 à Nancy
					<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
					<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>
				</ul>
			</div>
		</div>					    								    			
	</div>  	
</div>
@endsection



z
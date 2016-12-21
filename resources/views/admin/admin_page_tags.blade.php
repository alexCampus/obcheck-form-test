@extends('layout.default_co')

@section('title', 'admin-post')
		
@section('content')   
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
@endsection


		
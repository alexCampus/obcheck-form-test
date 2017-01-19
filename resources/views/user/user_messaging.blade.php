@extends('layout.default_co') 

@section('title', 'messagerie')
 	
@section('messagingClass')

@endsection

@section('content')

    <div class="row">	    	
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
			<div class=" widget">
				<h3>Ma Page</h3>
				<img src="/images/shaker.jpg" class="img-responsive center-block" alt="Ma photo">
				<div class="pseudo_widget">
				<p> Pseudo: Shaker</p>
				</div>
			</div>
		</div>

		<!--fil_actu-->
	<div class="col-lg-7 col-md-9 col-sm-12 col-xs-12">	
			<div class="bloc_fil_actu">
		<!--Search_bar-->
    			<div class="row">
	    			<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post">
			  			<div class="col-lg-offset-4 col-lg-5 search_bar">
			    			<div class="input-group">
				      			<span class="input-group-btn">
								<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				      			</span>
			 					<input type="text" class="form-control" placeholder="Recherche..." id="recherche">
							</div>
						</div>
					</form>	
				</div> 
    			<div class="Nouveau Message">
    				<h4>Nouveau message</h4>
    				<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" onsubmit="return verifFormPublicationLettre(this)">
	    				<div class="form-group">
								<label for="user">Destinataire</label>
								<input type="text" name="user" class="form-control" id="user" onblur="verifLettre(this)">
								<div class="error" id="alert_user"></div>
						</div>
	    				<div class="form-group">
								<label for="comment">Message</label>
								<textarea class="form-control" name="comment" rows="5" id="comment" onblur="verifPublication(this)"></textarea>
								<div class="error" id="alert_comment"></div>
						</div>
						<input type="submit" class="btn btn-primary btn-sm" name="submit" value="Envoyer"> 
					</form>	
    			</div>
    			
    			@foreach($messages as $message)
    				<p> {{ $message->content }} crée par {{ $message->user ['pseudo']}}  </p>
    			@endforeach

    			<!-- <div class="received_message">
    				<h4>Messages reçus</h4>
    				<div class="message">
    					<img src="/images/chaton.jpg" alt="Avatar" class="avatar_message" />
    					<div class="pseudo_message"><a href="/amis/chaton">Chaton</a></div>
    					<div class="date_message">le 05/10/16 à 05h12</div>
    					<div class="contenu_message">
	    					Salut !! Gros concert ce WE sur Grenoble ! Tu viendras ?
	    					<a href="/evenements/1">Voici le lien !</a>
    					</div>
    					<button type="button" class="btn btn-primary btn-sm">Répondre</button>
    					<button type="button" class="btn btn-primary btn-sm">Supprimer</button>
    				</div>
    				<div class="message">
    					<img src="/images/chaton.jpg" alt="Avatar" class="avatar_message" />
    					<div class="pseudo_message"><a href="/amis/chaton">Chaton</a></div>
    					<div class="date_message">le 16/10/16 à 15h22</div>
    					<div class="contenu_message">
	    					Je t'ai pas vu au concert :'(
	    					<button type="button" class="btn btn-primary btn-sm">Répondre</button>
	    					<button type="button" class="btn btn-primary btn-sm">Supprimer</button>
    					</div>
    				</div>
    			</div>	

    			<div class="send_message">
    				<h4>Messages envoyés</h4>
    				<div class="message">
    					<img src="/images/chaton.jpg" alt="Avatar" class="avatar_message" />
    					<div class="pseudo_message"><a href="/amis/chaton">A Chaton</a></div>
    					<div class="date_message">le 16/10/16 à 16h01</div>
    					<div class="contenu_message">
	    					Désolé, j'avais du travail ;)
    					</div>
    				</div>
    				<div class="message">
    					<img src="/images/merlin.jpg" alt="Avatar" class="avatar_message" />
    					<div class="pseudo_message"><a href="/amis/chaton">A Merlin</a></div>
    					<div class="date_message">le 18/10/16 à 6h48</div>
    					<div class="contenu_message">
	    					On se voit demain ?
    					</div>
    				</div>
    			</div> -->
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-5 pub_widget">
			<img src="/images/pub1.jpg" alt="publicités">
		</div>
    	
    </div>
@endsection

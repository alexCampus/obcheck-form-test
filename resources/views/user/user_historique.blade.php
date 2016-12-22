@extends('layout.default_user')

@section('title', 'Historique')

@section('histoClass')
	{{ $classActive }}
@endsection
	   	    
@section('user_content')

<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">	
	<div class=" bloc_fil_actu padding_1">
		<div class="publication">
				
			<div class="row contenu_publication">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					<div class="avatar_container">
						<img src="/images/shaker.jpg" alt="Avatar" class="avatar_publication" />
					</div>
					<div class="pseudo_publication">
					<a href="/amis/shaker">Shaker</a>
					</div>
				</div>
				<div class="text_publication col-lg-10 col-md-10 col-sm-10 col-xs-9">
					<p>WOW super soirée, super groupe G ADORE !!!!! vite le prochain</p>
					<p>Tag : Musique</p>
					<div>
	    				<label class="btn btn-primary active">
	    					<input type="checkbox">Like
	    				</label>
						<a class="btn btn-warning btn-xs pull-right" href="#">Signaler</a>
						<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#commenter_2">Commenter</button>

						<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" onsubmit="return verifFormPublication(this)">
							<div class="collapse" id="commenter_2">
								<textarea class="form-control" name="comment2" rows="5" id="commenter" onblur="verifPublication(this)"></textarea>
								<div class="error" id="alert_comment2"></div>
								<input type="submit" class="btn btn-default btn-xs" name="submit" value="Publier">  						    
							</div>
						</form>	
					</div>
				</div>
			</div>
				<div class="commentaire">
					<div class="row contenu_commentaire">

						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
	    					<img src="/images/chien.jpg" alt="Avatar" class="avatar_commentaire" />
	    					<div class="pseudo_commentaire">	
	    						<a href="/amis/shaker">Hobby</a>
    						</div>
    					</div>
	    					<div class="text_publication col-lg-10 col-md-10 col-sm-10 col-xs-9">
	    						<p>j'ai pas eu la chance d'y aller :-( la prochaine fois ce serais cool qu'on y aille ensemble</p>

    							<p>Tag : Musique</p>
		    					<div>
	    							<label class="btn btn-primary active">
	    							<input type="checkbox">Like</label> 
	    							<a class="btn btn-warning btn-xs pull-right" href="#">Signaler</a>
	    						</div>
	    					</div>
					</div>

					<div class="row contenu_commentaire">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
							<img src="/images/shaker.jpg" alt="Avatar" class="avatar_commentaire" />
	    					<div class="pseudo_commentaire">
	    						<a href="/amis/shaker">Shaker</a>
    						</div>
    					</div>
    					<div class="text_publication col-lg-10 col-md-10 col-sm-10 col-xs-9">
    						<p>oui avec plaisir, Chaton sera de la partie :-)</p>

    						<p>Tag : Musique</p>
    						<div>
								<label class="btn btn-primary active">
								<input type="checkbox">Like</label> 
								<a class="btn btn-warning btn-xs pull-right" href="#">Signaler</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row contenu_publication">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					<div class="avatar_container">
						<img src="/images/shaker.jpg" alt="Avatar" class="avatar_publication" />
					</div>
					<div class="pseudo_publication">
					<a href="/amis/shaker">Shaker</a>
					</div>
				</div>
				<div class="text_publication col-lg-10 col-md-10 col-sm-10 col-xs-9">
					<p>Super week end en mode sensation de fou !!!!!!! paysage magnifique , rapide d'enfer et super équipe merci à tous ceux qui ont partipé à mon evenement !!!!</p>
					<p>Tag : Kayak / RDV en ardèche</p>
					<div>
	    				<label class="btn btn-primary active">
	    					<input type="checkbox">Like
	    				</label>
							<a class="btn btn-warning btn-xs pull-right" href="#">Signaler</a>
							<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#commenter_3">Commenter</button>
						<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" onsubmit="return verifForm(this)">
							<div class="collapse" id="commenter_3">
								<textarea class="form-control" name="commenter_3" rows="5" id="commenter" onblur="verifPublication(this)"></textarea>
								<div class="error" id="alert_commenter_3"></div>
								<input type="submit" class="btn btn-default btn-xs" name="submit" value="Publier">  						    
							</div>
						</form>		
					</div>
				</div>
			</div>
			<div class="row contenu_publication">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					<div class="avatar_container">
						<img src="/images/shaker.jpg" alt="Avatar" class="avatar_publication" />
					</div>
					<div class="pseudo_publication">
					<a href="/amis/shaker">Shaker</a>
					</div>
				</div>
				<div class="text_publication col-lg-10 col-md-10 col-sm-10 col-xs-9">
					<p>Coucou tout le monde ,ça interesse quelqu'un un ptit regroupement au parc Paul Mistral Grenoble ????</p>
					<p>Tag : Jeux Video</p>
					<div>
	    				<label class="btn btn-primary active">
	    					<input type="checkbox">Like
	    				</label>
							<a class="btn btn-warning btn-xs pull-right" href="#">Signaler</a>
							<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#commenter_2">Commenter</button>
						<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" onsubmit="return verifFormPublication(this)">
							<div class="collapse" id="commenter_2">
								<textarea class="form-control" name="commenter_2" rows="5" id="commenter" onblur="verifPublication(this)"></textarea>
								<div class="error" id="alert_comment2"></div>
								<input type="submit" class="btn btn-default btn-xs" name="submit" value="Publier">  						    
							</div>
						</form>		
					</div>
				</div>
			</div>

			<div class="row contenu_publication">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					<div class="avatar_container">
						<img src="/images/shaker.jpg" alt="Avatar" class="avatar_publication" />
					</div>
					<div class="pseudo_publication">
					<a href="/amis/shaker">Shaker</a>
					</div>
				</div>
				<div class="text_publication col-lg-10 col-md-10 col-sm-10 col-xs-9">
					<p>G voulu decouvrir le trail , genial le festival des Templiers !!! un grand merci aux connaisseurs qui ont pris du temps pour un novice comme moi :-)
					c'était vraiment chouette !! à refaire!!!</p>
					<p>Tag : Trail</p>
					<div>
	    				<label class="btn btn-primary active">
	    					<input type="checkbox">Like
	    				</label>
							<a class="btn btn-warning btn-xs pull-right" href="#">Signaler</a>
							<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#commenter_4">Commenter</button>

						<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" onsubmit="return verifForm(this)">
							<div class="collapse" id="commenter_4">
								<textarea class="form-control" name="commenter_4" rows="5" id="commenter" onblur="verifPublication(this)"></textarea>
								<div class="error" id="alert_commenter_4"></div>
								<input type="submit" class="btn btn-default btn-xs" name="submit" value="Publier">  						    
							</div>
						</form>
					</div>
				</div>
			</div>	    			
		</div>
	</div>

@endsection



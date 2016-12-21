@extends('layout.default_co')

	@section('title', $name)

	@section('content')
	
	<div class="row">	    	
		<div class="col-lg-2 col-md-2 col-sm-10 col-xs-10">
			<div class="widget">
				<h3>Merlin</h3>
				<img src="/images/merlin.jpg" class="img-responsive center-block" alt="ma_photo">
				<div class="pseudo_widget">
				</div>
			</div>
		</div>
		<div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
			<div class="bloc_fil_actu">
			<h4>Merlin</h4>		
    			<div class="publication">
    				<img src="/images/merlin.jpg" alt="Avatar" class="avatar_container" />
    				<div class="pseudo_publication"><a href="visit_friends.html">Merlin</a></div>
    				<div class="contenu_publication">
	    				<p>Trop bon ce gâteau !<br>

	    				https://www.youtube.com/watch?v=vYvXiowIGn0<br>

	    				#Cuisine<p>
	    				<div>
		    				<label class="btn btn-primary active"><input type="checkbox">Like</label>
							<a class="btn btn-default btn-xs pull-right" href="#">Signaler</a>
							<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#commenter_1">Commenter</button>
							<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" > 	
								<div class="collapse" id="commenter_1">
									<textarea class="form-control" rows="5" id="comment2" name="comment2" ></textarea>
									
									<input type="submit" class="btn btn-default btn-xs" name="submit" value="Publier">						    
							 	</div>
							</form>
	    				</div>
    				</div>
    				<div class="bloc_commentaire">
    					<div class="commentaire">
	    					<img src="/images/chien.jpg" alt="Avatar" class="avatar_commentaire" />
	    					<div class="pseudo_commentaire"><a href="visit_friends.html">Hobby</a></div>
	    					<div class="contenu_commentaire">
	    						<p>Trop dur à faire ... Moi il est pas très bon :(<p>
	    					<div>
    							<label class="btn btn-primary active"><input type="checkbox">Like</label> <a class="btn btn-default btn-xs pull-right" href="#">Signaler</a>
    						</div>
	    					</div>
	    					<img src="/images/merlin.jpg" alt="Avatar" class="avatar_commentaire" />
	    					<div class="pseudo_commentaire"><a href="visit_friends.html">Merlin</a></div>
	    					<div class="contenu_commentaire">
	    						<p>Ajoute 50 g de sucre ! Ca change tout, tu verras ;)<p>
	    						<div>
    								<label class="btn btn-primary active"><input type="checkbox">Like</label> <a class="btn btn-default btn-xs pull-right" href="#">Signaler</a>
    							</div>
	    					</div>
	    				</div>
    				</div>


    			</div>
    			<div class="publication">
    				<img src="/images/merlin.jpg" alt="Avatar" class="avatar_container" />
    				<div class="pseudo_publication"><a href="visit_friends.html">Merlin</a></div>
    				<div class="contenu_publication">
	    				<p>J'attaque la guitare !
	    				Des conseils pour bien débuter ?
	    				Des livres à me conseiller ?

	    				#Guitare<p>
	    				<div>
	    					<label class="btn btn-primary active"><input type="checkbox">Like</label>
	    					<a class="btn btn-default btn-xs pull-right" href="#">Signaler</a>
	    					<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#commenter_2">Commenter</button>
	    					<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post">
	  							<div class="collapse" id="commenter_2">
	  								<textarea class="form-control" rows="5" id="commenter_2"></textarea>
	  								<a class="btn btn-default btn-xs" href="#">Publier</a>						    
								</div>
							</form>				
	    				</div>
    				</div>
    			</div>
    			<div class="publication">
    				<img src="/images/merlin.jpg" alt="Avatar" class="avatar_container" />
    				<div class="pseudo_publication"><a href="visit_friends.html">Merlin</a></div>
    				<div class="contenu_publication">
	    				<p>Allez l'Olympique Campus !

	    				 #Football<p>
	    				<div>
		    				<label class="btn btn-primary active"><input type="checkbox">Like</label>
		    				<a class="btn btn-default btn-xs pull-right" href="#">Signaler</a>
		    				<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#commenter_3">Commenter</button>
	  						<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post">
	  							<div class="collapse" id="commenter_3">
	  								<textarea class="form-control" rows="5" id="commenter_3"></textarea>
	  								<a class="btn btn-default btn-xs" href="#">Publier</a>						    
								</div>
							</form>
	    				</div>
	    			</div>
    			</div>
    			<div class="publication">
    				<img src="/images/merlin.jpg" alt="Avatar" class="avatar_container" />
    				<div class="pseudo_publication"><a href="visit_friends.html">Merlin</a></div>
    				<div class="contenu_publication">
	    				<p>Je participe à "Soirée autour d'un couscous"(lien) !<p>
	    				<div>
		    				<label class="btn btn-primary active"><input type="checkbox">Like</label>
		    				<a class="btn btn-default btn-xs pull-right" href="#">Signaler</a>
	  						<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#commenter_4">Commenter</button>
	  						<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post">
	  							<div class="collapse" id="commenter_4">
	  								<textarea class="form-control" rows="5" id="commenter_4">></textarea>
	  								<a class="btn btn-default btn-xs" href="#">Publier</a>						    
								</div>
							</form>	
						</div>
					</div>
    			</div>
				<a class="button" href="user_friends.html">Retour à la liste de mes amis</a>
			</div>	
		</div>

		<div class="col-lg-3 col-md-3 col-sm-5 pub_widget">
			<img src="/images/pub2.jpg" alt="publicités">
		</div>	    		
    	
    </div>

	@endsection


	@section('script')
	<script type="text/javascript" src="js/verifAccueilConnectJquery.js"></script>
	@endsection
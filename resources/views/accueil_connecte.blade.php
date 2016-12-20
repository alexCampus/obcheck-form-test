@extends('layout.default_co')

@section('title','accueil connecté')

@section('content')
		  
	    <div class="row">	    	 
    		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    			<div class="widget">
    				<h3>Mes Hobbies</h3>
    				<div class="hobby_widget">
						<div class="hobby_name"><label><input type="checkbox" value="" class="checkbox_hobby_widget" > Moto</label></div>
						<div class="hobby_name"><label><input type="checkbox" value="" class="checkbox_hobby_widget" > Jazz</label></div>
						<div class="hobby_name"><label><input type="checkbox" value="" class="checkbox_hobby_widget" > Dessin</label></div>
						<div class="hobby_name"><label><input type="checkbox" value="" class="checkbox_hobby_widget" > Sports nautiques</label></div>						
					</div>
					<button class="btn btn-default btn-lg"><span class="glyphicon glyphicon-refresh"></span></button>
						
    			</div>
    			<div class="widget">
    				<h3>Évenements suggérés</h3>
    				<ul>
    					<li>Sortie à la mer le 28/10/2016<hr></li>
    					<li>Concert à la Belle ce Samedi 28/10/016<hr></li>
    					<li>Apéro à la Bobine dimanche 29 Octobre<hr></li>
    					<li>Randonnée dans le Vercors ce Week end<hr></li>
    				</ul>
    			</div>
    		</div>



    		<!--fil_actu-->
    		<div class="col-lg-7 col-md-9 col-sm-12 col-xs-12">
    		<!--Search_bar-->
    			<div class="bloc_fil_actu">
			   	    <div class="row">
			   	    
			   	    	<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post">
						  	<div class="col-lg-offset-3 col-lg-7 search_bar">
						    	<div class="input-group">
							      	<span class="input-group-btn">
							        <input type="submit" class="btn btn-default" value=""><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							      	</span>
					     			<input name="barre_recherche" type="text" class="form-control" id="barre_recherche" placeholder="Recherche...">
					     			
					     			<!-- Trigger the modal with a button -->
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Plus de critères</button>
						    	</div>
						    	
						</form>				    	
								<!-- Modal -->
								<div id="myModal" class="modal fade" role="dialog">
								  	<div class="modal-dialog">
									    <!-- Modal content-->
									    <div class="modal-content">
									    	<div class="modal-header">
									        	<button type="button" class="close" data-dismiss="modal">&times;</button>
									        	<h4 class="modal-title">Recherche Avancée</h4>
									      	</div>
									      	<div class="modal-body">						        
										        <form action="#">
													<input type="checkbox" name="geolocalisation">Rechercher autour de moi<br>
													<input type="checkbox" name="amis">Rechercher mes amis<br>
													<input type="checkbox" name="event">Rechercher les èvénements<br>
													<h4>Catégories</h4>
													<select class="form-control">
													 	<option disabled selected value> -- selectionner une option --</option>
													 	<option>Animaux</option>
													 	<option>Gastronomie</option>
													 	<option>Loisirs Créatifs</option>
													 	<option>Maison</option>
													 	<option>Multimédia</option>
													 	<option>Musique</option>
													 	<option>Nature</option>
													 	<option>Sports</option>
													 	<option>Véhicules</option>
													  	<option>Voyages</option>									  	
													</select>
													<input type="submit" value="Validez">
												</form>
								      		</div>
									      	<div class="modal-footer">
									        	<button type="button" class="btn btn-default" data-dismiss="modal">Fermez</button>
									      	</div>
								    	</div>
								  	</div>
								</div>
						  	</div>
					</div>
					<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post">
		    				<div class="form-group">
								<label for="comment">Nouvelle publication (Max 500 Caractères)
									<textarea class="form-control" name="comment" cols="500" rows="5" id="comment"></textarea>
									
								</label>
							</div>
							<div class="form-group">
								<div class="ui-widget">
									<label for="tags">Tags : </label>
									<div data-tag-box-class="tagging" id="chouchou" class="ui-autocomplete-input form-control" name="tag" autocomplete="off">Pokemon</div>
								</div>
								
							</div>
							<input type="submit" class="btn btn-default btn-sm" name="submit" value="Publier">
		    		</form>
	    				
	    			<div class="publication">
	    				
	    				<div class="row contenu_publication">
	    					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
		    					<div class="avatar_container">
		    						<img src="images/merlin.jpg" alt="Avatar" class="avatar_publication" />
		    					</div>
		    					<div class="pseudo_publication">
		    					<a href="visit_friends.html">Merlin</a>
		    					</div>
		    				</div>
	    					<div class="text_publication col-lg-10 col-md-10 col-sm-10 col-xs-9">
	    						<p>Trop bon ce gâteau !</p>

		    						<p>https://www.youtube.com/watch?v=vYvXiowIGn0</p>

		    						<p>Tag : Cuisine</p>
		    					<div>
				    				<label class="btn btn-primary active">
				    					<input type="checkbox">Like
				    				</label>
									<a class="btn btn-warning btn-xs pull-right" href="#">Signaler</a>
									<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#commenter_2">Commenter</button>
									<form class="form1" action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" >
										<div class="collapse" id="commenter_2">
											<textarea class="form-control" name="comment2" rows="5" id="text_commenter_2"></textarea>											
											<input type="submit" class="btn btn-default btn-xs" name="submit" value="Publier">									    
										</div>
									</form>
	    						</div>
	    					</div>
	    				</div>
    					<div class="commentaire">
    						<div class="row contenu_commentaire">

    							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
			    					<img src="images/chien.jpg" alt="Avatar" class="avatar_commentaire" />
			    					<div class="pseudo_commentaire">	
			    						<a href="visit_friends.html">Hobby</a>
		    						</div>
		    					</div>
			    					<div class="text_publication col-lg-10 col-md-10 col-sm-10 col-xs-9">
			    						<p>Trop dur à faire ... Moi il est pas très bon :( </p>
				    					<div>
			    							<label class="btn btn-primary active">
			    							<input type="checkbox">Like</label> 
			    							<a class="btn btn-warning btn-xs pull-right" href="#">Signaler</a>
			    						</div>
			    					</div>
	    					</div>

	    					<div class="row contenu_commentaire">
	    						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
									<img src="images/merlin.jpg" alt="Avatar" class="avatar_commentaire" />
			    					<div class="pseudo_commentaire">
			    						<a href="visit_friends.html">Merlin</a>
		    						</div>
		    					</div>
		    					<div class="text_publication col-lg-10 col-md-10 col-sm-10 col-xs-9">
		    						<p>Ajoute 50 g de sucre ! Ca change tout, tu verras ;)</p>
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
	    						<img src="images/chaton.jpg" alt="Avatar" class="avatar_publication" />
	    					</div>
	    					<div class="pseudo_publication">
	    					<a href="visit_friends.html">Chaton</a>
	    					</div>
	    				</div>
    					<div class="text_publication col-lg-10 col-md-10 col-sm-10 col-xs-9">
    						<p>Salut à tous ! Je cherche à écouter du bon vieux Jazz. Vous me conseillez quoi ? </p>

	    					<p>Tag : Jazz</p>
	    					<div>
			    				<label class="btn btn-primary active">
			    					<input type="checkbox">Like
			    				</label>
								<a class="btn btn-warning btn-xs pull-right" href="#">Signaler</a>
								<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#commenter_3">Commenter</button>
								<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post">
									<div class="collapse" id="commenter_3">
										<textarea class="form-control" name="comment3" rows="5" id="text_commenter_3"></textarea>										
										<input type="submit" class="btn btn-default btn-xs" name="submit" value="Publier">									    
									</div>
								</form>
							</div>
    					</div>
	    			</div>

	    			<div class="row contenu_publication">
    					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
	    					<div class="avatar_container">
	    						<img src="images/chien.jpg" alt="Avatar" class="avatar_publication" />
	    					</div>
	    					<div class="pseudo_publication">
	    					<a href="visit_friends.html">Hobby</a>
	    					</div>
	    				</div>
    					<div class="text_publication col-lg-10 col-md-10 col-sm-10 col-xs-9">
    						<p>Voici ma dernière création : (image) ! </p>

		    				<p>Tag: Cuisine</p>
	    					<div>
			    				<label class="btn btn-primary active">
			    					<input type="checkbox">Like
			    				</label>
									<a class="btn btn-warning btn-xs pull-right" href="#">Signaler</a>
									<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#commenter_4">Commenter</button>

								<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" >
									<div class="collapse" id="commenter_4">
										<textarea class="form-control" name="comment4" rows="5" id="text_commenter_4"></textarea>										
										<input type="submit" class="btn btn-default btn-xs" name="submit" value="Publier">									    
									</div>
								</form>
    						</div>
    					</div>
	    			</div>
	    			<div class="row contenu_publication">
    					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
	    					<div class="avatar_container">
	    						<img src="images/brochet.jpg" alt="Avatar" class="avatar_publication" />
	    					</div>
	    					<div class="pseudo_publication">
	    					<a href="visit_friends.html">Dededu38</a>
	    					</div>
	    				</div>
    					<div class="text_publication col-lg-10 col-md-10 col-sm-10 col-xs-9">
    						<p>Près de St Quentin dans l'étang de Fallavier : (image)</p>
		    				<p>Cuillère #2/0</p>
		    				<p>Tag : Pêche</p>
    					
	    					<div>
			    				<label class="btn btn-primary active">
			    					<input type="checkbox">Like
			    				</label>
									<a class="btn btn-warning btn-xs pull-right" href="#">Signaler</a>
									<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#commenter_5">Commenter</button>

								<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post">
									<div class="collapse" id="commenter_5">
										<textarea class="form-control" name="comment5" rows="5" id="text_commenter_5""></textarea>										
										<input type="submit" class="btn btn-default btn-xs" name="submit" value="Publier">									    
									</div>
								</form>
    						</div>
    					</div>
	    			</div>
	    		</div>
    		</div>
    		<!--PUB -->
    		<div class="col-lg-3 col-md-3 col-sm-5 pub_widget">
    			<img src="images/pub1.jpg" class="align_right" alt="publicités">
    		</div>
    	</div>
		

		
	@endsection
	
	
	<!-- Latest compiled and minified JavaScript -->
	
	
	@section("scripts")
	<script type="text/javascript" src="js/verifAccueilConnectJquery.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	

	<!--Plugin Jquery Tag-->
	<script type="text/javascript" src="js/tagging.min.js"></script>
	
	<script type="text/javascript">
		$("#chouchou").tagging();
	</script>

	<!--plugin notif-->
	<script src="js/jquery.msgPop.js"></script>
	<script type="text/javascript">
		
			// Set to true to use full width mode
			MsgPop.displaySmall = true;

			// Custom the postion
			MsgPop.position = "top-right";



			// Call the plugin
			$("#notification").click(function(){
				var image=$(".img-responsive header_avatar");
				MsgPop.open({
					// Options
					Type:  "success",
					Content:"<div><img src='images/merlin.jpg'> Merlin à liker votre post</div>",
					//AutoClose:false,
				});	
			});
	</script>
	
	<!--Plugin Scroll Up -->
	<script type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
	<script>
        $(function () {
            $(function () {
                    $.scrollUp({
                        animation: 'fade',
                        activeOverlay: '#00FFFF',
                        scrollImg: {
                            active: true,
                            type: 'background',
                            src: 'images/top.png'
                        }
                    });
                });
                $('#scrollUpTheme').attr('href', 'css/styles.css');          
        });

		var tags = [
	      "ActionScript",
	      "AppleScript",
	      "Asp",
	      "BASIC",
	      "C",
	      "C++",
	      "Clojure",
	      "COBOL",
	      "ColdFusion",
	      "Erlang",
	      "Fortran",
	      "Groovy",
	      "Haskell",
	      "Java",
	      "JavaScript",
	      "Lisp",
	      "Perl",
	      "PHP",
	      "Python",
	      "Ruby",
	      "Scala",
	      "Julie",
	      "Cheval",
	      "Jazz",
	      "Obcheck",
	      "Amandine",
	      "Loïc",
	      "Alexandre",
	      "Pokemon",
	      "Scheme"
	    ];
		$( ".type-zone" ).autocomplete({
	  		source: function( request, response ) {
			var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
			response( $.grep( tags, function( item ){
				return matcher.test( item );
			}) );
	     }
	    });
</script>

    </script>

@endsection
</body>
</html>
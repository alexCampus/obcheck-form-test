@extends('layout.default_co')

@section('title', 'Evenement')

@section('link')
	<link href="css/jquery-ui.css" rel="stylesheet">
@endsection

@section('content')		
	   	    
	<div class="row">	    	
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 no_pad">
			<div class="widget">
				<h3>Ma Page</h3>
				<img src="/images/shaker.jpg" class="img-responsive center-block" alt="ma_photo">
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
		<div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
			<div class="bloc_fil_actu">				
				<h2>créer mon événement</h2>
				<div class="col-lg-7 col-md-7 col-sm-7">
					<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" onsubmit="return verifFormCreateEvent(this)">
						<div class="form-group">
							<label for="intitulé">Intitulé
								<input type="text" name="intitule" class="form-control"  placeholder="Intitulé" required id="intitule" onblur="verifLettre(this)">
								<div class="error" id="alert_intitule"></div>
							</label>
						</div>
						<div class="form-group">
							<label for="description">description
								<textarea class="form-control" name="description" placeholder="description" required id="description" onblur="verifPublication(this)"></textarea>
								<div class="error" id="alert_description"></div>
							</label>
						</div>
						<div class="form-group">
							<label for="date">Date
								<input type="date" name="date" class="form-control" required id="date" onblur="verifDate(this)">
								<div class="error" id="alert_date"></div>
							</label>
						</div>
						<div class="form-group">
							<label for="lieu">Lieu
								<input type="text" name="lieu" class="form-control"  placeholder="lieu" required id="lieu" onblur="verifLettre(this)">
								<div class="error" id="alert_lieu"></div>
							</label>
						</div>

						<div class="form-group">
							<label for="categorie">Catégorie
								<select class="form-control" id="categorie" name="categorie" required>
									 	<option disabled selected value="0"> selectionner une option</option>
									 	<option value="1">Animaux</option>
									 	<option value="2">Gastronomie</option>
									 	<option value="3">Loisirs Créatifs</option>
									 	<option value="4">Maison</option>
									 	<option value="5">Multimédia</option>
									 	<option value="6">Musique</option>
									 	<option value="7">Nature</option>
									 	<option value="8">Sports</option>
									 	<option value="9">Véhicules</option>
									  	<option value="10">Voyages</option>									  	
								</select>
							</label>
						</div>
						<div class="form-group">
	                    	<label for="tag">tag
	                    		<input type="text" name="tag" class="form-control"  placeholder="#hashtags" required id="tag" onblur="verifTag(this)">
	                    		<div class="error" id="alert_tag"></div>
	                    	</label>
	     				</div>							
						<input type="submit" class="btn btn-default">
					</form>
				</div>
				<div class="clear"></div>
			</div>
		</div>				
		
		<div class="col-lg-3 col-md-3 col-sm-5 pub_widget">
			<img src="/images/pub3.jpg" alt="publicités">
		</div>
		
	</div>

@endsection		
	

	
@section('script_co')	
	<script type="text/javascript" src="js/func.js"></script>

	<!--calendrier-->	
	<script>

	var datePickerOptions = {
				dateFormat: "dd/mm/yy",
				dayNamesMin: ["Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa"],
				firstDay: 1,
				monthNames: [ "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre" ]
				};

	$(function() {
		$ ("#date").datepicker(datePickerOptions);
		
	});

	</script>
@endsection


	
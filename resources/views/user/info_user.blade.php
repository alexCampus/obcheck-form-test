@extends('layout.default_user')

@section('title', 'profil_modification')

@section('link')
	<link href="/css/jquery-ui.css" rel="stylesheet">
@endsection

@section('user_content')

	<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
		<div class="bloc_fil_actu">
			<h4>Mes Informations Personnelles</h4>
			<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" onsubmit="return verifFormInfoUser(this)">
				<img src="/images/shaker.jpg" class="img-responsive" alt="photo_avatar">
				<div class="form-group">
					<label for="photo_de_profil">Modifier ma photo de profil</label>
					<input type="file" id="photo_de_profil" name="myPicture" required="required" onblur="check_picture(this)" />
					<div class="error" id="alert_photo"></div>
				</div>
					<input type="submit" class="btn btn-default" value="Modifier">
			</form>
			<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" onsubmit="return verifForm(this)">						
				<div class="form-group form-group-lg col-7">
					<label for="pseudo">Modifier mon Pseudo
						<input class="form-control" name="pseudo" required id="pseudo" type="text" placeholder="pseudo"  onblur="verifLettre(this)">									
					</label>
					<div class="error" id="alert_pseudo"></div>
					<label for="nom">Modifier mon nom
						<input class="form-control" name="nom" required id="nom" type="text" placeholder="nom"  onblur="verifLettre(this)">									
					</label>
					<div class="error" id="alert_nom"></div>
					<label for="prenom">Modifier mon prénom
						<input class="form-control" name="prenom" required id="prenom" type="text" placeholder="prénom"  onblur="verifLettre(this)">									
					</label>
					<div class="error" id="alert_prenom"></div>
					<label for="email">Modifier mon Email
						<input class="form-control" name="email" required id="email"	type="email" placeholder="email"  onblur="verifEmail(this)">									
					</label>
					<div class="error" id="alert_email"></div>
					<label for="date">Ma date de naissance
						<input class="form-control" name="date" required id="date" type="text" onblur="verifDate(this)">									
					</label>
					<div class="error" id="alert_date"></div>
					<label for="city">Ma ville actuelle
						<input class="form-control" name="city" required id="city" type="text" placeholder="ville actuelle"  onblur="verifLettre(this)">									
					</label>
					<div class="error" id="alert_city"></div>
					<label for="phone">Modifier mon numéro de téléphone
						<input class="form-control" name="phone" required id="phone" type="text" placeholder="téléphone"  onblur="verifTelNumber(this)">									
					</label>
					<div class="error" id="alert_phone"></div>
					<label for="presentation">Présentez-vous en quelques lignes
						<textarea class="form-control" name="presentation" required cols="500" rows="5" id="presentation" onblur="verifPublication(this)"></textarea>					
					</label>
					<div class="error" id="alert_presentation"></div>
				</div>
				<input type="submit" value="Valider" class="btn btn-default"> 
				<a class="btn btn-default" href="/profil">Annuler</a>
			</form>
		<div class="clear"></div>	    			
		</div>	
	</div>	    	
	   
@endsection

@section('script_co')
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



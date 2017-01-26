@extends('layout.default_user')

@section('title', 'profil_modification')

@section('link')
	<link href="/css/jquery-ui.css" rel="stylesheet">
@endsection

@section('user_content')

	<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
		<div class="bloc_fil_actu">
			<h4>Mes Informations Personnelles</h4>
			<form action="/profil/{{ Auth::user()->id }}/update" method="post">
			{{ csrf_field() }}
				<img src="@if (Auth::user()->photo)
					    				{{ Auth::user()->photo }}
					    		  @else
					    		  /images/avatar-vide.jpeg
					    @endif" class="img-responsive" alt="photo_avatar">
				<div class="form-group">
					<label for="photo_de_profil">Modifier ma photo de profil</label>
					<input type="text" id="photo_de_profil" name="myPicture" />
					<div class="error" id="alert_photo"></div>
				</div>			
			
				<div class="form-group ">
					<label for="pseudo">Modifier mon pseudo
						<input class="form-control" name="pseudo" id="pseudo" type="text" placeholder="pseudo"  onblur="verifLettre(this)">									
					</label>
					<div class="error" id="alert_pseudo"></div>
				</div>
				<div class="form-group">
					<label for="nom">Modifier mon nom
						<input class="form-control" name="nom" id="nom" type="text" placeholder="nom"  onblur="verifLettre(this)">									
					</label>
					<div class="error" id="alert_nom"></div>
				</div>
				<div class="form-group">
					<label for="prenom">Modifier mon prénom
						<input class="form-control" name="prenom" id="prenom" type="text" placeholder="prénom"  onblur="verifLettre(this)">									
					</label>
					<div class="error" id="alert_prenom"></div>
				</div>
				<div class="form-group">
					<label for="email">Modifier mon Email
						<input class="form-control" name="email" id="email"	type="email" placeholder="email"  onblur="verifEmail(this)">									
					</label>
					<div class="error" id="alert_email"></div>
				</div>
				<div class="form-group">
					<label for="date">Ma date de naissance
						<input class="form-control" name="birthdate" id="date" type="text" onblur="verifDate(this)">									
					</label>
					<div class="error" id="alert_date"></div>
				</div>
				<div class="form-group">
					<label for="city">Ma ville actuelle
						<input class="form-control" name="city" id="city" type="text" placeholder="ville actuelle"  onblur="verifLettre(this)">									
					</label>
					<div class="error" id="alert_city"></div>
				</div>
				<div class="form-group">
					<label for="phone">Modifier mon numéro de téléphone
					</label>
					<div class="error" id="alert_phone"></div>
				</div>
				<div class="form-group">
					<label for="presentation">Présentez-vous en quelques lignes
						<textarea class="form-control" name="presentation" cols="500" rows="5" id="presentation" ></textarea>					
					</label>
					<div class="error" id="alert_presentation"></div>
				</div>
				<div class="form-group">
				</div>
				<input type="hidden" name="_method" value="put" />
				<button type="submit" class="btn btn-default">Valider</button>
				<a class="btn btn-default" href="/profil">Annuler</a>
			</form>
			<div class="clear"></div>	    			
		</div>	
	</div>	    	
	   
@endsection

@section('script_co')
	<script>

		var datePickerOptions = {
					dateFormat: "dd-mm-yy",
					dayNamesMin: ["Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa"],
					firstDay: 1,
					monthNames: [ "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre" ]
					};

		$(function() {
			$ ("#date").datepicker(datePickerOptions);
			
		});
	</script>
@endsection



@extends('layout.default_nonCo')

@section('title','inscription')

@section('content')

		<!--Form Inscription-->
	   	<div class="row">
	   		<div class="col-lg-offset-2 col-lg-7 col-md-12 col-sm-12 col-xs-12">
	   			<div class="bloc_fil_actu">
				   	<div class="col-lg-offset-1 col-lg-8 col-md-8 col-sm-8 col-xs-8 form_connexion">
					   	<fieldset class="col-md-offset-5 col-sm-offset-5 col-xs-offset-5">
					   	<h2>Inscription</h2>		   		
						   	<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" onsubmit="return verifFormInscription(this)">
						   		<div class="form-group">
								 	<label for="pseudo_inscription">Pseudo:</label>
								    <input type="text" class="form-control" name="pseudo"  placeholder="Pseudo" id="pseudo" onblur="verifPseudo(this)">
								    <div class="error" id="alert_pseudo"></div>
								</div>
								<div class="form-group">
									<label for="email">Adresse Email:</label>
									<input type="email" class="form-control" name="email"  placeholder="email" id="email" onblur="verifEmail(this)">
									<div class="error" id="alert_email"></div>
								</div>
								<div class="form-group">
									<label for="birthday">Date de naissance:</label>
									<input type="text" class="form-control" name="birthday"   id="date" onblur="verifDate(this)">
									<div class="error" id="alert_birthday"></div>
								</div>
								<div id="complexify">
									<div classs="form">
										<div class="form-group">
											<label for="password">Mot de passe :</label>
											<input type="password" name="pwd_inscription" class="form-control" id="password" id="pwd_inscription" onblur="verifPassword(this)" onblur="corrMdpControle(this, getElementById('pwd_confirmation'))" placeholder="mot de passe">
										</div>
									</div>
									<div>
										<p id="complexity" class="pull-right">0%</p>
									</div>
									<div class="progress">
										<div id="complexity-bar" class="progress-bar" role="progressbar">
										</div>
									</div>
									
									<div class="error" id="alert_password"></div>
								</div>
								<div class="form-group">
								    <label for="pwd_confirmation">Confirmation Mot de passe:</label>
								    <input type="password" class="form-control" name="pwd_confirmation"  placeholder="Confirmation mot de passe" id="pwd_confirmation" onblur="corrMdpControle(this, getElementById('password'))">
								    <div class="error" id="alert_pwd_confirmation"></div>
								</div>				 
								<input type="submit" class="btn btn-default" value="Connexion">
							</form>
							<a href="accueil_connecte.html">Connexion accueil connecté</a>
						</fieldset>

					</div>
					<div class="row">
						<div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-lg-6 col-md-8 col-sm-8 col-xs-12 form_connexion">
							<h2>Inscription via les Réseaux Sociaux</h2>					
							<button class="btn btn-sm btn-default">Connexion <i class="fa fa-twitter-square"></i></button>
							<button class="btn btn-sm btn-primary">Connexion <i class="fa fa-facebook-square"></i></button>
							<button class="btn btn-sm btn-danger">Connexion <i class="fa fa fa-google-plus-square"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection

@section('scripts')

	<!--calendrier-->
	<script src="js/external/jquery/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
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
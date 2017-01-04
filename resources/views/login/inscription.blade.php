@extends('layout.default_nonCo')

@section('title','inscription')

@section('link')
	<link href="/css/jquery-ui.css" rel="stylesheet">
@endsection

@section('content')

		<!--Form Inscription-->
	   	<div class="row">
	   		<div class="col-lg-offset-2 col-md-offset-2 col-lg-7 col-md-7 col-sm-12 col-xs-12">
		   		<div class=" bloc_fil_actu">
				   	<div class="col-lg-offset-4 col-lg-8 col-md-8 col-sm-8 col-xs-8 form_connexion text-center">
					   	<fieldset>
					   	<h2>Inscris-toi</h2>		   		
						   	<form class="form-horizontal" role="form" action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" onsubmit="return verifFormInscription(this)">
						   		<div class="form-group">
								 	<label for="pseudo_inscription" class="col-sm-2 control-label""></label>
								    <input type="text" class="form-control" name="pseudo" required  placeholder="Pseudo" id="pseudo" onblur="verifPseudo(this)">
								    <div class="error" id="alert_pseudo"></div>
								</div>
								<div class="form-group">
									<label for="email" class="col-sm-2 control-label"></label>
									<input type="email" class="form-control" name="email" required  placeholder="Email" id="email" onblur="verifEmail(this)">
									<div class="error" id="alert_email"></div>
								</div>
								<div class="form-group">
									<label for="birthday" class="col-sm-2 control-label"></label>
									<input type="text" class="form-control" name="birthday" required placeholder="Date de naissance"  id="date" onblur="verifDate(this)">
									<div class="error" id="alert_birthday"></div>
								</div>
								<div id="complexify">
									<div classs="form">
										<div class="form-group">
											<label for="password" class="col-sm-2 control-label"></label>
											<input type="password" name="pwd_inscription" required class="form-control" id="password" id="pwd_inscription" onblur="verifPassword(this)" onblur="corrMdpControle(this, getElementById('pwd_confirmation'))" placeholder="Mot de passe">
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
								    <label for="pwd_confirmation" class="col-sm-2 control-label"></label>
								    <input type="password" class="form-control" name="pwd_confirmation" required  placeholder="Confirmation mot de passe" id="pwd_confirmation" onblur="corrMdpControle(this, getElementById('password'))">
								    <div class="error" id="alert_pwd_confirmation"></div>
								</div>				 
								<input type="submit" class="btn btn-connect btn-lg btn-default" value="S'inscrire">
							</form>
							<a href="/toto">Connexion accueil connecté</a>
						</fieldset>

					</div>
					<div class="row">
						<div class="col-lg-offset-4 col-lg-8 col-md-8 col-sm-8 col-xs-8 form_connexion text-center">
							<h2>Inscris-toi via</h2>					
							<button class="btn btn-lg btn-default"><i class="fa fa-twitter-square"></i></button>
							<button class="btn btn-lg btn-default"><i class="fa fa-facebook-square"></i></button>
							<button class="btn btn-lg btn-default"><i class="fa fa fa-google-plus-square"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection

@section('scripts')
	<script type="text/javascript" src="/js/jquery-ui.js"></script>
	<!--Progress Bar Password-->
	<script src="js/jquery.complexify.banlist.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.complexify.min.js"></script>
	<script src="js/progressBarPassword.js" type="text/javascript"></script>

	<!--datepicker-->
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
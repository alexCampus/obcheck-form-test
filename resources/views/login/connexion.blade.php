@extends('layout.default_nonCo')
@section('title','connexion')

@section('content')

	   	<!--Form Connexion-->
	   	<div class="row">
	   		<div class="col-lg-offset-2 col-md-offset-2 col-lg-7 col-md-7 col-sm-12 col-xs-12">
		   		<div class=" bloc_fil_actu">
				   	<div class="col-lg-offset-4 col-lg-8 col-md-8 col-sm-8 col-xs-8 form_connexion text-center">
					   	<fieldset>
					   		<h2>Connecte-toi</h2>
						   	<form class="text-center" role="form" action="http://campus-numerique-in-the-alps.com/formulaire/index.php"  method="post"  onsubmit="return verifFormConnexion(this)">
								<div class="form-group">
								 	<label for="pseudo_connexion" class="col-sm-2 control-label""></label>
								    <input type="text" class="form-control" name="pseudo_connexion"  placeholder="Pseudo" id="pseudo_connexion" required  onBlur="verifPseudo(this)">
								    <div class="error" id="alert_pseudo_connexion"></div>
								 </div>
								 <div class="form-group">
								    <label for="pwd_connexion" class="col-sm-2 control-label""></label>
								    <input type="password" class="form-control" name="pwd_connexion"  placeholder="Mot de passe" id="pwd_connexion" required onBlur="verifPassword(this)">
								    <div class="error" id="alert_password"></div>
								 </div>
								 <div class="checkbox">
								    <label>
								    	<input type="checkbox" name="box" value="rememberMe">Se souvenir de moi
								    </label>
								 </div>
								
								  	<input type="submit" class="btn btn-lg btn-default" value="Se Connecter" >
								
							</form>
						</fieldset>
							<a href="/reinitialisation">Réinitialiser votre mot de passe</a>
					</div>
					<div class="row">
						<div class="col-lg-offset-4 col-lg-8 col-md-8 col-sm-8 col-xs-8 form_connexion text-center">
							<h2>Connecte-toi via </h2>	
								<button class="btn btn-lg btn-default"><i class="fa fa-twitter-square"></i></button>
								<button class="btn btn-lg btn-default"><i class="fa fa-facebook-square"></i></button>
								<button class="btn btn-lg btn-default"><i class="fa fa fa-google-plus-square"></i></button>
		
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection
@extends('layout.default_nonCo')
@section('title','connexion')

@section('content')

	   	<!--Form Connexion-->
	   	<div class="row">
	   		<div class="col-lg-offset-2 col-md-offset-2 col-lg-7 col-md-7 col-sm-12 col-xs-12">
		   		<div class=" bloc_fil_actu">
				   	<div class="col-lg-offset-4 col-lg-4 form_connexion">
					   	<fieldset>
					   		<h2>Connexion</h2>
						   	<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php"  method="post"  onsubmit="return verifFormConnexion(this)">
								<div class="form-group">
								 	<label for="pseudo_connexion">Pseudo:</label>
								    <input type="text" class="form-control" name="pseudo_connexion"  placeholder="Pseudo" id="pseudo_connexion" required  onBlur="verifPseudo(this)">
								    <div class="error" id="alert_pseudo_connexion"></div>
								 </div>
								 <div class="form-group">
								    <label for="pwd_connexion">Mot de passe:</label>
								    <input type="password" class="form-control" name="pwd_connexion"  placeholder="mot de passe" id="pwd_connexion" required onBlur="verifPassword(this)">
								    <div class="error" id="alert_password"></div>
								 </div>
								 <div class="checkbox">
								    <label>
								    	<input type="checkbox" name="box" value="rememberMe">Se souvenir de moi
								    </label>
								 </div>
								  	<input type="submit" class="btn btn-default" value="Se Connecter" >
							</form>
						</fieldset>
							<a href="/reinitialisation">Réinitialiser votre mot de passe</a>
					</div>
					<div class="row">
						<div class="col-lg-offset-4 col-lg-6 col-md-6 col-sm-6 form_connexion">
							<h2>Connexion via les Réseaux Sociaux</h2>					
							<button class="btn btn-sm btn-default">Connexion <i class="fa fa-twitter-square"></i></button>
							<button class="btn btn-sm btn-primary">Connexion <i class="fa fa-facebook-square"></i></button>
							<button class="btn btn-sm btn-danger">Connexion <i class="fa fa fa-google-plus-square"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection
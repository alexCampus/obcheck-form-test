@extends('layout.default_nonCo')

@section('title')
	Réinitialisation
@endsection

@section('content')
   	<!--Form Connexion-->
   	<div class="row">
	   	<div class="col-lg-offset-4 col-lg-4 col-md-4 col-sm-4  col-xs-8 form_connexion">
		   	<fieldset>
		   		<h2>Réinitialisation du Mot de Passe</h2>
			   	<form action="http://campus-numerique-in-the-alps.com/formulaire/index.php" method="post" onsubmit="return verifFormEmail(this)">
					<div class="form-group">
					    <label for="email">Adresse Email:</label>
					    <input type="email" name="email" class="form-control" required="required" placeholder="email" id="email" onblur="verifEmail(this)">
					    <div class="error" id="alert_email"></div>
					</div>					 
					  	<input type="submit" class="btn btn-default" value="Réinitialiser">
				</form>
			</fieldset>
		</div>
	</div>
@endsection

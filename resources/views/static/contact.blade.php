@extends('layout.default_nonCo')

@section('title', 'contact')
		
@section('content')

	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
			<div class="widget">
				<h3>Shaker</h3>
				<img src="/images/shaker.jpg" class="img-responsive center-block" alt="ma_photo">
				<div class="pseudo_widget">
				</div>
			</div>
		</div>
		<div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
			<div class="bloc_fil_actu">
				<h2>Contactez-nous</h2>
				<form  method="post" onsubmit="return verifFormContact(this)">
    				<p>Pseudo (si connecté)</p>
					<div class="form-group">
					 	<label for="prénom">Prénom:
					    	<input type="text" name="prenom" class="form-control" required="required" placeholder="Votre Prenom" id="prenom" onblur="verifLettre(this)">
					    	<div class="error" id="alert_prenom"></div>
					 	</label>
					 </div>
					 <div class="form-group">
					 	<label for="nom">Nom:
					    	<input type="text" name="nom" class="form-control" required="required" placeholder="Votre Nom" id="nom" onblur="verifLettre(this)">
					    	<div class="error" id="alert_nom"></div>
					    </label>
					 </div>
					 <div class="form-group">
					 	<label for="email">Adresse Email:
					    	<input type="email" name="email" class="form-control" required="required" placeholder="Votre Email" id="email" onblur="verifEmail(this)">
					    	<div class="error" id="alert_email"></div>
					    </label>
					</div>
					 <div class="form-group">
						<label for="message">Votre message:
							<textarea class="form-control"  name="message" placeholder="Votre Message" required id="message" onblur="verifPublication(this)"></textarea>
							<div class="error" id="alert_message"></div>
						</label>
					</div>
					  	<input type="submit" class="btn btn-default">
				</form>
			</div>
		</div>
		
		<div class="col-lg-3 col-md-3 col-sm-5 pub_widget">
			<img src="/images/pub2.jpg" alt="publicités">
		</div>
	</div>

@endsection
		
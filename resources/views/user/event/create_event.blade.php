@extends('layout.default_user')

@section('title', 'Evenement')

@section('link')
	<link href="/css/jquery-ui.css" rel="stylesheet">
@endsection

@section('newEventClass')
	{{ $classActive }}
@endsection

@section('user_content')		
	   	    
	<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
		<div class="bloc_fil_actu">				
			<h2>Je crée mon événement</h2>

			<form action="" method="post" onsubmit="return verifFormCreateEvent(this)">
  				<div class="form-group">
    				<label for="intitulé">Intitulé</label>
					<input type="text" name="intitule" class="form-control"  placeholder="Intitulé" required id="intitule" onblur="verifLettre(this)">
							<div class="error" id="alert_intitule"></div>
  				</div>
  				<div class="form-group">
    				<label for="description">description</label>
    				<textarea class="form-control" name="description" placeholder="description" required id="description" onblur="verifPublication(this)"></textarea>
					<div class="error" id="alert_description"></div>
  				</div>
  				
  				<div class="form-group">
					<label for="date">Date</label>
					<input type="date" name="date" class="form-control" required id="date" onblur="verifDate(this)">
					<div class="error" id="alert_date"></div>
				</div>
  				
  				<div class="form-group">
					<label for="lieu">Lieu</label>
					<input type="text" name="lieu" class="form-control"  placeholder="lieu" required id="lieu" onblur="verifLettre(this)">
					<div class="error" id="alert_lieu"></div>	
				</div>

				<div class="form-group">
					<label for="categorie">Catégorie</label>
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
				</div>

				<div class="form-group">
                    <label for="tag">tag</label>
                    <input type="text" name="tag" class="form-control"  placeholder="#hashtags" required id="tag" onblur="verifTag(this)">
                    <div class="error" id="alert_tag"></div>
     			</div>	

  				<button type="submit" class="btn btn-default">Valider</button>
			</form>

		</div>

			<div class="clear"></div>
	</div>
					
		
@endsection		
	

	
@section('script_co')	

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


	
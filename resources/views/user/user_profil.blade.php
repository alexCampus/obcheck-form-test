@extends('layout.default_user')

@section('title','profil')

@section('profilClass')
	
@endsection

@section('user_content')

<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">		
    <div class=" bloc_fil_actu padding_1">
			<div class="pseudo_info">
				<h2>Mes Informations Personnelles</h2>
					<p> Pseudo : {{ Auth::user()->pseudo }} </p>
					<p> Mon prenom : {{ Auth::user()->firstname }}</p>
					<p> Mon nom : {{ Auth::user()->lastname }}</p>
					<p> Mon numero de téléphone : (+33){{ Auth::user()->phonenumber }}</p>
					<p> Ma ville : {{ Auth::user()->city }}</p>
					<p> Mon Email: {{ Auth::user()->email }} </p>
					<p> Ma description : {{ Auth::user()->description }} </p>
					<p> Ma date d'inscription: {{ Auth::user()->created_at->format('d/m/Y') }} </p>
					<p> Ma date de naissance: {{ Auth::user()->birthdate->format('d/m/Y') }}</p>
					
			</div>
			<div class="pseudo_hobby">
				<h2>Mes Hobbies</h2>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 form_connexion text-center">
					<button class="btn btn-lg">Jazz</button>
					<button class="btn btn-lg">Kayak</button>
					<button class="btn btn-lg">Trail</button>
					<button class="btn btn-lg">Jeux vidéos</button>
				</div>

				<!-- Trigger the modal with a button -->
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 form_connexion text-center">
						<button type="button" class="btn btn-lg btn-info" data-toggle="modal" data-target="#myModal">Ajoutez de nouveaux Hobbies</button>
				</div>

				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
				  	<div class="modal-dialog">

				    	<!-- Modal content-->
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<button type="button" class="close" data-dismiss="modal">&times;</button>
				        		<h4 class="modal-title">Hobby</h4>
				      		</div>
				      		<div class="modal-body">						        
					        	<!--Search_bar-->
				   	    		<div class="row">
						  			<div class="col-lg-offset-4 col-lg-5 search_bar">
						    			<div class="input-group">
							      			<span class="input-group-btn">
							        		<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
							      			</span>
					     					<input type="text" class="form-control" placeholder="Recherche...">
						    			</div>
						  			</div>
								</div>  
			      			</div>
				      		<div class="modal-footer">
				        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      		</div>
				    	</div>
				  	</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
@endsection 	
    		

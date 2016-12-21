@extends('layout.default_user')

@section('title','profil')



@section('user_content')		
    <div class=" bloc_fil_actu">
		<div class="col-lg-7 col-md-9 col-sm-12 col-xs-12">
			<div class="pseudo_info">
				<h4>Mes Informations Personnelles</h4>
					<p> pseudo : Shaker</p>
					<p> Mon Email: Shaker@hotmail.fr </p>
					<p> Ma date d'inscription: 06/10/2016 </p>
					<p> Ma date de naissance: 14/09/1979</p>
					<p> Ma ville : Grenoble</p>
			</div>
			<div class="pseudo_hobby">
				<h4>Mes Hobbies</h4>
				<ul class="list_user">
					<li>Jazz</li>
					<li>Kayak</li>
					<li>Trail</li>
					<li>Jeux vidéo</li>
				</ul>

				<!-- Trigger the modal with a button -->
				<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Ajoutez de nouveaux Hobbies</button>

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
    		

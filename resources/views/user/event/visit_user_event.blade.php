@extends('layout.default_co')

	@section('title', 'Evenement n°'.$id)

	@section('content')
		<div class="row">    		
    		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    			<div class="widget">
    				<h3>Merlin</h3>
    				<img src="/images/merlin.jpg" class="img-responsive center-block" alt="ma_photo">
    			<div class="pseudo_widget">
    				
    			</div>
    			</div>
			</div>
			<div class="col-lg-7 col-md-8 col-sm-11 col-xs-11">
				<div class=" bloc_fil_actu">
					<h2>Randonnée Vercors</h2>
					<ul>
						<li>RDV à 9h30 sur le parking de carrefour market sassenage.On partira tous ensemble jusqu'au plateau de lans en vercors . pensez au covoiturage pour monter</li>
						<li>17/11/2016</li>
						<li>Vercors</li>
						<li>#Nature</li>
					</ul>
						<h3>Participants</h3>
					<ul>						
						<li>Emma</li>
						<li>Chaton</li>
						<li>Hobby</li>
						<li>Shaker</li>	
					</ul>
					
					<a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">S'inscrire à l'événement</a>
					<a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Se désinscrire de l'événement</a>
				</div>
    		</div>
    		<div class="col-lg-3 col-md-3 col-sm-5 pub_widget">
    			<img src="/images/pub3.jpg" alt="publicités">
    		</div>	    	
    	</div>
    @endsection

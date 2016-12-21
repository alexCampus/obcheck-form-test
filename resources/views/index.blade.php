@extends('layout.default_nonCo')

@section('title','accueil_non_co')

@section("btn_login")
	<div class="col-lg-3 col-md-3 col-xs-2">
		<a href="connexion.html" class="btn btn-default btn-logout notif" role="button"> Connecte-toi </a>
		<a href="inscription.html" class="btn btn-default btn-logout notif" role="button"> Inscription </a>
	</div>
@endsection

@section('content')
		  
		<div class="row">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
  					<!-- Indicators -->
  				<ol class="carousel-indicators">
		    		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		   			<li data-target="#myCarousel" data-slide-to="1"></li>
		   			<li data-target="#myCarousel" data-slide-to="2"></li>
		    		<li data-target="#myCarousel" data-slide-to="3"></li>
		    		<li data-target="#myCarousel" data-slide-to="4"></li>
  				</ol>

 					<!-- Wrapper for slides -->
	  		<div class="carousel-inner" role="listbox">
	    		<div class="item active">
			      		<img src="images/autumn.jpg" alt="">
			     	<div class="carousel-caption">
			     	</div>
	  			</div>

		    	<div class="item">
				      	<img src="images/florence.jpg" alt="concert">
				     <div class="carousel-caption">
				    </div>
		    	</div>

		    	<div class="item">
		      			<img src="images/lake.jpg" alt="">
		      		<div class="carousel-caption">
		      		</div>
		    	</div>

		    	<div class="item">
		      			<img src="images/vienna.jpg" alt="tour_eiffel">
		      		<div class="carousel-caption">
		      		</div>
		    	</div>

		    	<div class="item">
			      	<img src="images/motorcup.jpg" alt="Flower">
			      	<div class="carousel-caption">
			      	</div>
		    	</div>
  			</div>

		 <!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
			</div>
		

			<div class="col-lg-offset-2 col-lg-9 index_text">
				<h2>Bienvenue sur obcheck</h2>
				<h3>Le meilleur endroit sur le net pour partager ses loisirs !</h3><hr>
				<p>obcheck est un réseau social internet innovant qui permet à ses utilisateurs de rester en contact, de partager des hobbies et créer des événements autour de ses passions.</p> 
				<p>Publiez textes, photos, citations, musiques et vidéos et partagez-les avec vos amis ! Créez des liens avec d’autres utilisateurs partageant les mêmes loisirs et regroupez réellement vos contacts autour d’événements, comme par exemple :
				</p>
				<ul>
					<li>un concert de jazz,</li>
					<li>une rencontre sportive,</li>
					<li>une démonstration culinaire,</li>
					<li>ou un partage de loisirs créatifs</li> 
				</ul>
				<h4>La vision de obcheck ? Vous mettre en relation dans la vraie vie !</h4>
			</div>
		</div>	
				
		<div class="row">		
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tweet">
				<h3>Tweet de obcheck</h3>
		        <a class="twitter-timeline" href="https://twitter.com/hashtag/digigre" data-widget-id="790530927889973248">Tweets sur #digigre</a>
            	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>          
			</div>
			<div class="col-lg-10 col-md-10 hidden-sm hidden-xs">
				<div id="slideShow">
			      <img src="images/1.jpg" id="item-1" />
			      <img src="images/2.jpg" id="item-2" />
			      <img src="images/3.jpg" id="item-3" />
			      <img src="images/4.jpg" id="item-4" />
			      <img src="images/5.jpg" id="item-5" />
			      <img src="images/6.jpg" id="item-6" />
			      <img src="images/7.jpg" id="item-7" />
			      <img src="images/8.jpg" id="item-8" />
			      <img src="images/9.jpg" id="item-9" />
	   			</div>
	   		</div>
		</div>	
@endsection
		
	

<!--Jquery-->
    <script type="text/javascript">
        $(document).ready(function () {
        	$("#slideShow").waterwheelCarousel({
        			autoPlay : 1000,
        	});

		});
    </script>
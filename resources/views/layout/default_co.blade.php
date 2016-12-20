


@extends('layout.default_nonCo')

@section("link")

<link rel="stylesheet" href="/css/msgPop.css">
<link rel="stylesheet" type="text/css" href="/css/tag-basic-style.css">
<link id="scrollUpTheme" rel="stylesheet" href="/css/scrollUp.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
@endsection

@section ("dropdown_user")
<!-- dropdown Avatar -->
				<div class="avatar col-lg-2 col-md-2 col-sm-2 col-xs-2 btn-group">
				  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <img src="/images/shaker.jpg" class="img-responsive header_avatar" alt="photo_avatar"> <span class="caret"></span>
				  	</button>
				  	<ul class="dropdown-menu">
				    	<li><a href="user_profil.html">Mon profil</a></li>
				    	<li><a href="user_events.html">Mes événements</a></li>
				    	<li><a href="user_historique.html">Mon historique</a></li>
				    	<li><a href="user_friends.html">Mes amis</a></li>
				    	<li><a href="create_event.html">Nouvel évènement</a></li>
				  	</ul>
				  	<span class="glyphicon glyphicon-globe notif" aria-hidden="true" id="notification"><a href="#">Notifications</a></span>
					<span class="glyphicon glyphicon-envelope notif" aria-hidden="true"><a href="user_messaging.html">Messages</a></span>
					<a href="index.html" class="btn btn-default btn-logout" role="button">Se déconnecter</a>
				</div>
@endsection

@section ('navbar')
<!-- Fixed nav bar -->
			<nav class="navbar navbar-default navbar-fixed-top">
		      <div class="container-fluid" id="container_nav_bar">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a href="accueil_connecte.html"><img src="/images/logo_simple_v3.png" alt="logo_obcheck" class="logo"></a>
		         
		        </div>

		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav">
		            <li class="active"><a href="accueil_connecte.html">Accueil</a></li>
		            <li><a href="user_messaging.html">Messagerie</a></li>
		            <li><a href="create_event.html">Créer un événement</a></li>
		          </ul>
		          <ul class="nav navbar-nav navbar-right">
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon profil <span class="caret"></span></a>
		              <ul class="dropdown-menu">
				    	<li><a href="user_profil.html">Mon profil</a></li>
				    	<li><a href="user_events.html">Mes événements</a></li>
				    	<li><a href="user_historique.html">Mon historique</a></li>
				    	<li><a href="user_friends.html">Mes amis</a></li>
				    	<li><a href="create_event.html">Nouvel évènement</a></li>
				  	</ul>
		            </li>
		          </ul>
		        </div><!--/.nav-collapse -->
		      </div>
		    </nav>
@endsection

@section("scripts")
<script type="text/javascript" src="js/verifAccueilConnectJquery.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	

	<!--Plugin Jquery Tag-->
	<script type="text/javascript" src="js/tagging.min.js"></script>
	
	<script type="text/javascript">
		$("#chouchou").tagging();
	</script>

	<!--plugin notif-->
	<script src="js/jquery.msgPop.js"></script>
	<script type="text/javascript">
		
			// Set to true to use full width mode
			MsgPop.displaySmall = true;

			// Custom the postion
			MsgPop.position = "top-right";



			// Call the plugin
			$("#notification").click(function(){
				var image=$(".img-responsive header_avatar");
				MsgPop.open({
					// Options
					Type:  "success",
					Content:"<div><img src='images/merlin.jpg'> Merlin à liker votre post</div>",
					//AutoClose:false,
				});	
			});
	</script>

	<!--Plugin Scroll Up -->
	<script type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
	<script>
        $(function () {
            $(function () {
                    $.scrollUp({
                        animation: 'fade',
                        activeOverlay: '#00FFFF',
                        scrollImg: {
                            active: true,
                            type: 'background',
                            src: 'images/top.png'
                        }
                    });
                });
                $('#scrollUpTheme').attr('href', 'css/styles.css');          
        });

		var tags = [
	      "ActionScript",
	      "AppleScript",
	      "Asp",
	      "BASIC",
	      "C",
	      "C++",
	      "Clojure",
	      "COBOL",
	      "ColdFusion",
	      "Erlang",
	      "Fortran",
	      "Groovy",
	      "Haskell",
	      "Java",
	      "JavaScript",
	      "Lisp",
	      "Perl",
	      "PHP",
	      "Python",
	      "Ruby",
	      "Scala",
	      "Julie",
	      "Cheval",
	      "Jazz",
	      "Obcheck",
	      "Amandine",
	      "Loïc",
	      "Alexandre",
	      "Pokemon",
	      "Scheme"
	    ];
		$( ".type-zone" ).autocomplete({
	  		source: function( request, response ) {
			var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
			response( $.grep( tags, function( item ){
				return matcher.test( item );
			}) );
	     }
	    });
</script>

    </script>

@endsection
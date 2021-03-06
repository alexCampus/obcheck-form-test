@extends('layout.default_nonCo')

@section("link")

<link rel="stylesheet" href="/css/msgPop.css">
<link rel="stylesheet" type="text/css" href="/css/tag-basic-style.css">
<link id="scrollUpTheme" rel="stylesheet" href="/css/scrollUp.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

@yield('link_co')

@endsection

@section ("dropdown_user")
<!-- dropdown Avatar -->
				<div class="avatar col-lg-2 col-md-2 col-sm-2 col-xs-2 btn-group vcenter">
					<div class='btn-group'>
					  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <img src="@if (Auth::user()->photo)
					    				{{ Auth::user()->photo }}
					    		  @else
					    		  /images/avatar-vide.jpeg
					    @endif" class="img-responsive header_avatar" alt="photo_avatar"> <span class="caret"></span>
					  	</button>
					  	<ul class="dropdown-menu">
					    	<li><a href="/profil/{{ Auth::user()->pseudo }}">Mon profil</a></li>
					    	<li><a href="/evenements">Mes événements</a></li>
					    	<li><a href="/historique">Mon historique</a></li>
					    	<li><a href="/amis">Mes amis</a></li>
					    	<li><a href="/evenements/nouveau">Nouvel évènement</a></li>

				    		<li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
					    
					    	
					  	</ul>
				  	</div>
					<span class="col-lg-12 glyphicon glyphicon-globe notif" aria-hidden="true" id="notification"><a href="#">Notifications</a></span>
					<span class="col-lg-12 glyphicon glyphicon-envelope notif" aria-hidden="true"><a href="/messagerie">Messages</a></span>
					<a href="{{ url('/logout') }}" class="btn btn-default btn-logout" role="button">Se déconnecter</a>
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
		          <a href="/toto"><img src="/images/logo_simple_v3.png" alt="logo_obcheck" class="logo2"></a>
		         
		        </div>

		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav">
		            <li class="@yield('accueilConnecteClass')" ><a href="/toto">Accueil</a></li>
		            <li class="@yield('messagingClass')" ><a href="/messagerie" >Messagerie</a></li>
		            <li class="@yield('newEventClass')" ><a href="/evenements/nouveau">Créer un événement</a></li>
		          </ul>
		          <ul class="nav navbar-nav navbar-right">
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->pseudo }} <span class="caret"></span></a>
		              <ul class="dropdown-menu">
				    	<li><a href="/profil/{{ Auth::user()->pseudo }}">Mon profil</a></li>
				    	<li><a href="/evenements">Mes événements</a></li>
				    	<li><a href="/historique">Mon historique</a></li>
				    	<li><a href="/amis">Mes amis</a></li>
				    	<li><a href="/evenements/nouveau">Nouvel évènement</a></li>
				    	
			    		<li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
				  	</ul>
		            </li>
		          </ul>
		        </div><!--/.nav-collapse -->
		      </div>
		    </nav>
@endsection


@section("scripts")
	<script type="text/javascript" src="/js/verifAccueilConnectJquery.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	

	<!--Plugin Jquery Tag-->
	<script type="text/javascript" src="/js/tagging.min.js"></script>	
	<script type="text/javascript">
		$("#chouchou").tagging();
	</script>

	<!--plugin notif-->
	<script src="/js/jquery.msgPop.js"></script>
	<script type="text/javascript" src="/js/notifByAmand.js"></script>
			


	<!--Plugin Scroll Up -->
	<script type="text/javascript" src="/js/jquery.scrollUp.min.js"></script>
	<script type="text/javascript" src="/js/scrollUpByAlex.js"></script>
     
     <!--Plugin autocomplete -->   
	<script type="text/javascript" src="/js/autocompletByLoic.js"></script>
		

	@yield('script_co')

@endsection
@extends('layout.default_co')


@section('content')

<div class="row">	    	
	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
		<div class="widget notif" id="widget_ma_page">
			<h3>Ma Page</h3>
			
			<img src="/images/shaker.jpg" class="img-responsive center-block" id="profil_modification" alt="Ma_photo">
			<span class="glyphicon glyphicon-pencil btn-default btn-xs fil_ariane" id="btn_modif_photo"><a href="/profil/modification" >modifier ma photo</a></span>

			<div class="pseudo_widget">
				<p> Shaker</p>
				<a class="btn btn-default btn-xs" id="btn_modif_info" href="/profil/modification">Modifier mes infos personnelles</a>
			</div>	
		</div>
	</div>
	<div class="col-lg-9 col-md-10 col-sm-10">
		<div class="row">
    		<div class="col-lg-offset-1 col-md-offset-2 col-sm-offset-3 col-lg-7 col-md-10 col-sm-11 col-xs-12">
    			<ul class="nav nav-tabs">
				  	<li role="presentation" class=" @yield('profilClass') "><a href="/profil">Mon profil</a></li>
				  	<li role="presentation" class=" @yield('eventClass') "><a href="/evenements">Mes événements</a></li>
				  	<li role="presentation" class=" @yield('histoClass') "><a href="/historique">Mon historique</a></li>
				  	<li role="presentation" class=" @yield('friendClass') "><a href="/amis">Mes amis</a></li>
				  	<li role="presentation" class=" @yield('newEventClass') "><a href="/evenements/nouveau">Nouvel évènement</a></li>
				</ul>
			</div>
		</div>

		@yield('user_content')

		   		
		<div class="col-lg-3 col-md-3 col-sm-5 pub_widget">
			<img src="/images/pub2.jpg" alt="publicités">
		</div>
	</div> 
</div>

@endsection

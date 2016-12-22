@extends('layout.default_user')
@section('title','evenements')

@section('eventClass')
	{{ $classActive }}
@endsection

@section('user_content')

	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">	
		<div class="bloc_fil_actu">
			<div class="col-lg-9 col-md-9 col-sm-12">
				<h2>Mes événements</h2>
				<div class="modifier_event">
					<p>Concert sugar
					<a class="btn btn-default btn-xs pull-right" href="#">Supprimer</a>
				</div>
				<div class="modifier_event">	
					<p>Picnik Kayak
					<a class="btn btn-default btn-xs pull-right" href="#">Supprimer</a>
				</div>
				<div class="modifier_event">
					<p>Rencontre gamer
					<a class="btn btn-default btn-xs pull-right" href="#">Supprimer</a>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12">
					<p><a href="/evenements/nouveau" class="btn btn-default btn-lg active" role="button" aria-pressed="true">Créer un événement</a></p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2>Je Participe</h2>
					<ol>
						<li><a href="/evenements/1">Festival Avignon</a></li>
						<li><a href="/evenements/1">Rando Vercors</a></li>
						<li><a href="/evenements/1">Vernissage Lisa</a></li>
					</ol>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
    		
@endsection

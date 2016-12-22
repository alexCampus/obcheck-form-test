@extends('layout.default_admin')

@section('title', 'admin-event')

@section('adminEventsClass')
	{{ $classActive }}
@endsection

@section('admin_content')   
		
	<div class="col-lg-offset-3">
		<ul>
			<li><h3>Vive la haine : </h3>  rassemblement haineux organisé par Rageux du 38
			le 03 decembre 2016 à lyon
			<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
			<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>
			<li><h3>Invit porno : </h3>Rejoignons nous pour des choses legalement punissables au bois des tordu le 06/12/2016
			<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
			<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>
			<li><h3>Réunion tupperware : </h3> Rendez vous autour d'un café pour une reunion sympa le 02/02/2017 à Nancy
			<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
			<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>
		</ul>
	</div>

@endsection




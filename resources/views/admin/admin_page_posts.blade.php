@extends('layout.default_admin')

@section('title', 'admin_post')

@section('adminPostsClass')
	{{ $classActive }}
@endsection

@section('admin_content')   
		
	<div class="col-lg-offset-3">
		<ul>
			<li><h3>Rageux du 38  : </h3>hey les gars ,etroit d'esprit ,Je tiens des propos homophobe
			<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
			<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>
			<li><h3>Haineux du 83: </h3>salut je tiens des propos raciste et deballe toute un com haineux
			<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
			<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>
			<li><h3>Pervers du 78: </h3> coucou je suis un relou et partage un com a caractère pornographique.
			<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
			<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>
			<li><h3>Spam du 14 : </h3> hey coucou tout le monde je suis un spam et j'innonde le mur de com douteux 
			<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
			<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>
			<li><h3>Supporter de l'Om: </h3>allez l'OM les gars
			<button class="btn btn-xs btn-default">Conserver et envoyer un message à l'utilisateur ayant signalé</button>
			<button class="btn btn-xs btn-danger">Supprimer et envoyer un message à l'utilisateur concerné</button></li>

		</ul>
	</div>

@endsection
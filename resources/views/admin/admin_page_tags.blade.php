@extends('layout.default_admin')

@section('title', 'admin-post')

@section('adminTagsClass')
	{{ $classActive }}
@endsection

@section('admin_content')   

	<div class="col-lg-offset-3">
		<div class="button_tag-admin">
			<p>#musique <button class="btn btn-xs btn-danger pull-right ">Supprimer et envoyer un message à l'utilisateur concerné</button></p>
			<p>#jeux vidéo <button class="btn btn-xs btn-danger pull-right ">Supprimer et envoyer un message à l'utilisateur concerné</button></p>
			<p>#Nature <button class="btn btn-xs btn-danger pull-right " >Supprimer et envoyer un message à l'utilisateur concerné</button></p>
			<p>#kayak <button class="btn btn-xs btn-danger pull-right ">Supprimer et envoyer un message à l'utilisateur concerné</button></p>
			<p>#cuisine <button class="btn btn-xs btn-danger pull-right">Supprimer et envoyer un message à l'utilisateur concerné</button></p>			    			
		</div>
	</div>
  
@endsection


		
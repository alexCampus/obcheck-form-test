@extends('layout.default_co')

@section('content')
	<div class="row">
		<div class="col-lg-offset-3 col-lg-7 col-md-8 col-sm-12 col-xs-12">
			<div class="bloc_fil_actu">
    			<h2>Admin Page</h2>
    			<ul class="nav nav-tabs">
					<li role="presentation" class=" @yield('adminTagsClass') "><a href="/admin/tags">Historique des Tags</a></li>
					<li role="presentation" class=" @yield('adminPostsClass') "><a href="/admin/post">Posts ayant été signalés</a></li>
					<li role="presentation" class=" @yield('adminEventsClass') "><a href="/admin/events">Historique des événements</a></li>
				</ul>

				@yield('admin_content')
				
			</div>
		</div>
	</div>
@endsection
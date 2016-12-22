@extends(isset($pseudo) ? 'layout.default_co' : 'layout.default_nonCo')

@section('title')
	A propos
@endsection

@section('content')
	
	<div class="row">    		
		<div class="col-lg-offset-2 col-lg-7 col-md-10 col-sm-12">
			<div class="bloc_fil_actu">
			<h2>A Propos de Nous</h2>
			<p>obcheck est un réseau social internet innovant qui permet à ses utilisateurs de rester en contact, de partager des hobbies et créer des événements autour de ses passions. obcheck est le meilleur endroit sur le net pour partager ses loisirs !
			Publiez textes, photos, citations, musiques et vidéos et partagez-les avec vos amis ! Créez des liens avec d’autres utilisateurs partageant les mêmes loisirs et regroupez réellement vos contacts autour d’événements, comme par exemple :</p>
			<ul>
				<li>un concert de jazz</li>
				<li>une rencontre sportive</li>
				<li>une démonstration culinaire</li>
				<li>ou un partage de loisirs créatifs</li>
			</ul>
			<br>
			<p>La vision de obcheck ? Vous mettre en relation dans la vraie vie ! Parce que le lien social se dégrade de plus en plus dans nos sociétés et vos amis ne partagent pas forcément les mêmes passions que vous, obcheck se positionne en acteur convaincu, optimiste et porteur de solutions pour tisser des liens autour de vos hobbies d'abord sur la toile mais surtout dans la vraie vie, et près de chez vous ! Nous créons la technololgie qui permette à chacun de nourrir ses passions et de s'enrichir de nouvelles expériences. Notre but ? Vous rassembler autour d'expériences partagées !
			</p>
			</div>
		</div>
		
		<div class="col-lg-3 pub_widget">
			<img src="/images/pub1.jpg" alt="publicités google adsense">
		</div>	    	
	</div>

@endsection
	
	

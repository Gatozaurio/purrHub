@extends('layouts.app')

@section('title', 'PurrHub')

@section('content')

<h1>Bienvenido a PurrHub</h1>
<div class="carousel slide w-100 m-auto" data-ride="carousel">
	<div class="carousel-inner">
		@foreach ($concerts as $concert)
			@if ( $concert['id'] == $concerts[0]['id'] )
				<div class="carousel-item active">
			@else
				<div class="carousel-item">
			@endif
			 <img src="{{ $concert->artists[0]->image }}" alt="{{ $concert['name'] }}">
			 <div class="carousel-caption d-none d-md-block">
			   <h1>{{ $concert['name'] }}</h1>
			   <h2>{{ $concert['location'] }}</h2>
			 </div>
			</div>
		@endforeach
	</div>
	<!-- <a class="carousel-control-prev" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Anterior</span>
	</a>
	<a class="carousel-control-next" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Siguiente</span>
	</a> -->
</div>
<h4 class="mt-4 mb-4">
	Purrhub es una plataforma en desarrollo para los amantes de la música en directo.
</h4>

<p class="text-justify">
	Cat ass trophy reward the chosen human with a slow blink, but scream for no reason at 4 am jump on human and sleep on her all night long be long in the bed, purr in the morning and then give a bite to every human around for not waking up request food, purr loud scratch the walls, the floor, the windows, the humans or damn that dog . Cough furball into food bowl then scratch owner for a new one.
</p>

<p class="text-justify">
	Thinking longingly about tuna brine brown cats with pink ears yet slap owner's face at 5am until human fills food dish, for play riveting piece on synthesizer keyboard jumps off balcony gives owner dead mouse at present then poops in litter box snatches yarn and fights with dog cat chases laser then plays in grass finds tiny spot in cupboard and sleeps all day jumps in bathtub and meows when owner fills food dish the cat knocks over the food dish cat slides down the water slide and into pool and swims even though it does not like water.
</p>






@endsection

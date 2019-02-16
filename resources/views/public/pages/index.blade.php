@extends('layouts.app')

@section('title', 'PurrHub')

@section('content')

<h1>Bienvenido a PurrHub</h1>
<div class="carousel slide w-100 m-auto" data-ride="carousel">
	<ol class="carousel-indicators">
		<!-- <li data-target="#carousel3" data-slide-to="0" class="active"></li>
		<li data-target="#carousel3" data-slide-to="1"></li>
		<li data-target="#carousel3" data-slide-to="2"></li> -->
	</ol>
	<div class="carousel-inner">
		@foreach ($concerts as $concert)
			@if ( $concert['id'] == $concerts[0]['id'] )
				<div class="carousel-item active">
			@else
				<div class="carousel-item">
			@endif
			 <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.sxsw.com%2Fwp-content%2Fuploads%2F2016%2F06%2FDez-Dickerson-of-The-Revolution-performs-onstage-at-the-Print-Tribute-Concert-at-The-Outdoor-Stage-at-Lady-Bird-Lake.-Photo-by-Hutton-Supancic.jpg&f=1" alt="{{ $concert['name'] }}">
			 <div class="carousel-caption d-none d-md-block">
			   <h1>{{ $concert['name'] }}</h1>
			   <h2>{{ $concert['location'] }}</h2>
			 </div>
			</div>
		@endforeach
	</div>
	<a class="carousel-control-prev" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Anterior</span>
	</a>
	<a class="carousel-control-next" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Siguiente</span>
	</a>
</div>


@endsection

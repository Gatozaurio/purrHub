@extends('layouts.app')

@section('title', 'Concierto')

@section('content')
<div class="mt-4">
	<h2><strong>{{ $concierto['name'] }}</strong></h2><a href="{{ $concierto['ticket'] }}" class="btn btn-success">Comprar entrada</a>
</div>

<div class="mt-3">
	<h5><strong>Precio: </strong>{{ $concierto['price'] }} €</h5>
	<h5><strong>Fecha: </strong>{{ $concierto['date'] }}</h5>
	<h5><strong>Horario: </strong></h5>
	<p>{{ $concierto['schedule'] }} - Apertura de recinto </p>
</div>

<div class="mt-5">
	<h3><strong>Ubicación</strong></h3>
	<hr>
	<h5>{{ $concierto['city'] }}</h5>
	<h5>{{ $concierto['location'] }}</h5>
	<h5>{{ $concierto['address'] }}</h5>
</div>

<div class="mt-5">
	<h3><strong>Información</strong></h3>
	<hr>
	<h5>{{ $concierto['info'] }}</h5>
</div>
@endsection

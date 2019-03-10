@extends('layouts.app')

@section('title', 'Concierto')

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
    <li class="breadcrumb-item"><a href="/conciertos">Conciertos</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $concierto['name'] }}</li>
  </ol>
</nav>

<div class="justify-content-between">
	<span  class="mt-2">
		<h2><strong>{{ $concierto['name'] }}</strong></h2>
		<a href="{{ $concierto['ticket'] }}" class="btn btn-success">Comprar entrada</a>
	</span >
	<span class="col-2">
		{{ $concierto->users->count() }} Asistentes
	</span>
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
	<button id="botonToggle" class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#informacion" aria-expanded="false" aria-controls="informacion">Más info</button>
	<hr>
	<h5 id="informacion" class="collapse">{{ $concierto['info'] }}</h5>
</div>

<div class="mt-5">
		<h3><strong>Comentarios</strong></h3>
		<hr>

		<div id="comentarios">
			@forelse($concierto->comments as $comentario)
				<ul class="list-group">
					@include('public.comentarios.index')
				</ul>
			@empty
				<p>¡Se el primero en comentar!</p>
			@endforelse
		</div>
		@auth
		<form action="/conciertos" method="post" data-action="create">
			@csrf
			<div class="form-group">
			<input type="hidden" name="id_concierto" id="id_concierto" value="{{$concierto->id}}">
				<input type="text" class="form-control mt-3 {{ $errors->has('message')?"is-invalid":""}}" id="message" name="message" placeholder="Escribe tu comentario">
				@if ( $errors->has('message') )
					<div class="invalid-feedback">
						{{ $errors->all('message') }}
					</div>
				@endif
			</div>

			<button type="submit" class="btn btn-success">Enviar</button>
			<div class="spinner-border invisible ml-3" id="spinner"></div>
		</form>
		@endauth
</div>

@endsection
@push('scripts')
	<script src="{{ mix('/js/concierto/concierto.js') }}" defer ></script>
	<script src="{{ mix('/js/concierto/ajaxShow.js') }}" defer ></script>
	<script src="{{ mix('/js/comentarios/ajaxCreation.js') }}" defer ></script>
@endpush
@push('estilos')
	<link href="{{ mix('/css/concierto/concierto.css') }}" rel="stylesheet">
@endpush

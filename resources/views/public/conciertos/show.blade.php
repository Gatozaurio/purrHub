@extends('layouts.app')

@section('title', 'Concierto')

@section('content')
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
		@forelse($concierto->comments as $comentario)
			<div class="comentarios">
				<ul class="list-group">
					@include('public.comentarios.index')
				</ul>
			</div>
			@empty
			<p>¡Se el primero en comentar!</p>
		@endforelse

		<form action="/conciertos" method="post" data-action="create">
			@csrf
			<div class="form-group">
			<input type="hidden" name="id_concierto" id="id_concierto" value="{{$concierto->id}}">
				<input type="text" class="form-control {{ $errors->has('message')?"is-invalid":""}}" id="message" name="message" placeholder="Escribe tu comentario">
				@if ( $errors->has('message') )
					<div class="invalid-feedback">
						{{ $errors->first('message') }}
					</div>
				@endif
			</div>

			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
</div>

@endsection
@push('scripts')
	<script src="{{ mix('/js/concierto/concierto.js') }}" defer ></script>
	<script src="{{ mix('/js/comentarios/ajaxCreation.js') }}" defer ></script>
@endpush
@push('estilos')
	<link href="{{ mix('/css/concierto/concierto.css') }}" rel="stylesheet">
@endpush

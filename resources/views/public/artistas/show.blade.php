@extends('layouts.app')

@section('title', 'Artista')

@section('content')
<div class="mt-4">
	<h2><strong>{{ $artist['name'] }}</strong></h2>
</div>

<div class="mt-5">
	<button id="botonToggle" class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#informacion" aria-expanded="false" aria-controls="informacion">Más info</button>
	<hr>
	<h5 id="informacion" class="collapse">{{ $artist['info'] }}</h5>
</div>

<div class="mt-3">
	 <div class='btn-group'>
		<a href="{{ $artist['web'] }}" class="mr-2"><i class="fas fa-globe-europe"></i></a>
		<a href="{{ $artist['spotify'] }}" class="mr-2"><i class="fab fa-spotify"></i></a>
		<a href="{{ $artist['youtube'] }}" class="mr-2"><i class="fab fa-youtube"></i></a>
		<a href="{{ $artist['instagram'] }}" class="mr-2"><i class="fab fa-instagram"></i></a>
		<a href="{{ $artist['twitter'] }}" class="mr-2"><i class="fab fa-twitter"></i></a>
		<a href="{{ $artist['facebook'] }}" class="mr-2"><i class="fab fa-facebook"></i></a>
	</div>
</div>

@endsection
@push('scripts')
	<script src="{{ mix('/js/concierto/concierto.js') }}" defer ></script>
@endpush
@push('estilos')
	<link href="{{ mix('/css/concierto/concierto.css') }}" rel="stylesheet">
@endpush

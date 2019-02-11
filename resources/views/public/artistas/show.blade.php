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
	<ul>
		<li><a href="{{ $artist['web'] }}">Web oficial</a></li>
		<li><a href="{{ $artist['spotify'] }}">Spotify</a></li>
		<li><a href="{{ $artist['youtube'] }}">Youtube</a></li>
		<li><a href="{{ $artist['instagram'] }}">Instagram</a></li>
		<li><a href="{{ $artist['twitter'] }}">Twitter</a></li>
		<li><a href="{{ $artist['facebook'] }}">facebook</a></li>
	</ul>
</div>

@endsection
@push('scripts')
	<script src="{{ mix('/js/concierto/concierto.js') }}" defer ></script>
@endpush
@push('estilos')
	<link href="{{ mix('/css/concierto/concierto.css') }}" rel="stylesheet">
@endpush

@extends('layouts.app')

@section('title', 'Conciertos')

@section('content')

<h1>Lista de conciertos</h1>
@auth
	<div id="crearEventos"  class="dropdown">
	<button id="botonCrearEventos" class="btn btn-success mb-10 dropdown-toggle"
			type="button"
			data-toggle="dropdown"
			aria-haspopup="true"
			aria-expanded="false">
		<i class="fas fa-plus"></i> Nuevo evento
	</button>
	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		<a class="dropdown-item" href="/conciertos/crear">Concierto</a>
		<a class="dropdown-item" href="#">Festival</a>
	</div>
	</div>
@endauth

<div id="elementosMostrar">
	<div id="conciertosMostrados" class="row">
		@include('public.conciertos.partials.showConcerts')
	</div>
</div>

@include('partials.deleteModal')

@endsection

@push('scripts')
	<script src="{{ mix('/js/eventos/eventos.js') }}" defer ></script>
	<script src="{{ mix('/js/general/deleteConfirmation.js') }}" defer ></script>
	<script src="{{ mix('/js/general/ajaxPagination.js') }}" defer ></script>
	<script src="{{ mix('/js/general/tooltip.js') }}" defer></script>
@endpush
@push('estilos')
	<link href="{{ mix('/css/eventos/eventos.css') }}" rel="stylesheet">
@endpush

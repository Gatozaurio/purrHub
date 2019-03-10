@extends('layouts.app')

@section('title', 'Conciertos')

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
    <li class="breadcrumb-item"><a href="/conciertos">Conciertos</a></li>
  </ol>
</nav>

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

<div class="mx-auto col-1 mt-2">
<div class="">
		<div class="spinner-border" id="spinner"></div>
		</div>
</div>

@include('partials.deleteModal')
@include('partials.sinElementos')

@endsection

@push('scripts')
	<script src="{{ mix('/js/general/anime.min.js') }}" defer ></script>
	<script src="{{ mix('/js/eventos/eventos.js') }}" defer ></script>
	<script src="{{ mix('/js/eventos/animejs.js') }}" defer ></script>
	<script src="{{ mix('/js/general/deleteConfirmation.js') }}" defer ></script>
	<script src="{{ mix('/js/general/ajaxPagination.js') }}" defer ></script>
	<script src="{{ mix('/js/general/tooltip.js') }}" defer></script>
@endpush
@push('estilos')
	<link href="{{ mix('/css/eventos/eventos.css') }}" rel="stylesheet">
@endpush

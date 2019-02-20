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
	<div class="row">
	@forelse ($concerts as $concert)
	<div data-idElemento="{{ $concert['id'] }}" class=" mr-lg-4 mr-md-2 mt-4 col-12 col-lg-3 col-md-6">
		<div class="card" style="width: 18rem;">
			<div class="card-header">
				<h5 class="text-center"><strong>{{ $concert['name'] }}</strong></h5>
			</div>

			<div class="card-body">
				<img class="card-img-top" class="img-responsive img-rounded" src="{{ $concert->artists[0]->image }}" alt="Concierto">
				<h6 class="card-subtitle my-2 text-muted">{{ $concert['price'] }} €</h6>
				<h5 class="card-text">{{ $concert['location'] }}</h5>
				<div class='btn-group d-flex'>
					<a href="/conciertos/{{ $concert['slug'] }}" class="btn btn-primary border border-primary rounded ml-auto mr-1 col-4"><i class="fas fa-eye"></i></a>
					@auth
						<a href="/conciertos/{{ $concert['id'] }}/editar" class="btn btn-primary border border-primary rounded mx-1 col-4"><i class="fas fa-edit"></i></a>

						<form action="/conciertos/{{ $concert['id'] }}"  data-elemento="conciertos" data-action="delete" data-elementoBorrar="{{ $concert['id'] }}" method="post">
							@csrf
							@method('delete')
							<button type="submit" class="btn btn-danger ml-lg-5"><i class="fas fa-trash-alt"></i></a>
						</form>
					@endauth
				</div>
			</div>
		</div>
	</div>
	@empty
	<p>No hay conciertos</p>
	@endforelse
	</div>
</div>


<div class="d-flex justify-content-center mt-4">
   {{ $concerts->links() }}
</div>

@include('partials.deleteModal')

@endsection

@push('scripts')
	<script src="{{ mix('/js/eventos/eventos.js') }}" defer ></script>
	<script src="{{ mix('/js/general/deleteConfirmation.js') }}" defer ></script>
@endpush
@push('estilos')
	<link href="{{ mix('/css/eventos/eventos.css') }}" rel="stylesheet">
@endpush

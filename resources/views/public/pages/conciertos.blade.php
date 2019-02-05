@extends('layouts.app')

@section('title', 'Conciertos')

@section('content')
 <h1>Lista de conciertos</h1>
 <div id="crearEventos"  class="dropdown">
    <button id="botonCrearEventos" class="btn btn-success mb-10 dropdown-toggle"
            type="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false">
        Nuevo evento
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="/conciertos/crear">Concierto</a>
        <a class="dropdown-item" href="#">Festival</a>
    </div>
</div>

<div class="row">
  @forelse ($concerts as $concert)
	<div class=" mr-lg-4 mr-md-2 mt-4 col-12 col-lg-3 col-md-6">
	<div class="card" style="width: 18rem;">
		<div class="card-header">
			<h5 class="text-center"><strong>{{ $concert['name'] }}</strong></h5>
		</div>
		<div class="card-body">
			<img class="card-img-top" class="img-responsive img-rounded" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.pexels.com%2Fphotos%2F1047442%2Fpexels-photo-1047442.jpeg%3Fauto%3Dcompress%26cs%3Dtinysrgb%26h%3D350&f=1" alt="Concierto">
			<h6 class="card-subtitle my-2 text-muted">{{ $concert['price'] }} €</h6>
			<h5 class="card-text">{{ $concert['location'] }}</h5>
			<div class='btn-group'>
	     		<a href="/conciertos/{{ $concert['slug'] }}" class="btn btn-primary border border-primary rounded mr-1"><i class="fas fa-eye"></i></a>
	     		<a href="/conciertos/{{ $concert['id'] }}/editar" class="btn btn-primary border border-primary rounded mx-1"><i class="fas fa-edit"></i></a>

	     		<form action="/conciertos/{{ $concert['id'] }}" method="post">
	      			@csrf
	      			@method('delete')
	      			<button type="submit" class="btn btn-danger ml-lg-5"><i class="fas fa-trash-alt"></i></a>
	     		</form>
	    	</div>
   		</div>
	</div>
</div>
  @empty
    <p>No hay conciertos</p>
  @endforelse
</div>


<div class="d-flex justify-content-center mt-4">

	{{ $concerts->links() }}
</div>

@endsection
@push('scripts')
	<script src="{{ mix('/js/eventos/eventos.js') }}" defer ></script>
@endpush
@push('estilos')
	<link href="{{ mix('/css/eventos/eventos.css') }}" rel="stylesheet">
@endpush

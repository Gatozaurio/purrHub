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

  <div class="card mr-4 mt-4" style="width: 18rem;">
   <div class="card-body">
     <h5 class="card-title">{{ $concert['name'] }}</h5>
     <h6 class="card-subtitle mb-2 text-muted">{{ $concert['price'] }} €</h6>
     <p class="card-text">{{ $concert['location'] }}</p>
     <div class='btn-group'>
     <a href="/conciertos/{{ $concert['slug'] }}" class="btn btn-primary border border-primary rounded mr-1">Ver</a>
     <a href="/conciertos/{{ $concert['id'] }}/editar" class="btn btn-primary border border-primary rounded mx-1">Editar</a>

     <form action="/conciertos/{{ $concert['id'] }}" method="post">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn-danger ml-5">Borrar</a>
     </form>
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

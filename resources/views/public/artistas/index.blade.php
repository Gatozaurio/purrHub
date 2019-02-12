@extends('layouts.app')

@section('title', 'Artistas')

@section('content')


<h1>Lista de artistas</h1>
   <a href="/artistas/crear" class="btn btn-success mb-10">Nuevo artista</a>

<div class="row">
 @forelse ($artists as $artist)
   <div class=" mr-lg-4 mr-md-2 mt-4 col-12 col-lg-3 col-md-6">
   <div class="card" style="width: 18rem;">
	   <div class="card-header">
		   <h5 class="text-center"><strong>{{ $artist['name'] }}</strong></h5>
	   </div>
	   <div class="card-body">
		   <img class="card-img-top" class="img-responsive img-rounded" src="{{ $artist['image'] }}" alt="Imágen del artista">
		   <h6 class="card-subtitle my-2 text-muted">Conciertos</h6>
		   <div class='btn-group'>
			   <a href="/artistas/{{ $artist['slug'] }}" class="btn btn-primary border border-primary rounded mr-1"><i class="fas fa-eye"></i></a>
			   <a href="/artistas/{{ $artist['id'] }}/editar" class="btn btn-primary border border-primary rounded mx-1"><i class="fas fa-edit"></i></a>

			   <form action="/artistas/{{ $artist['id'] }}" method="post">
				   @csrf
				   @method('delete')
				   <button type="submit" class="btn btn-danger ml-lg-5"><i class="fas fa-trash-alt"></i></a>
			   </form>
		   </div>
	   </div>
   </div>
</div>
 @empty
   <p>No hay artistas</p>
 @endforelse
</div>


<div class="d-flex justify-content-center mt-4">
   {{ $artists->links() }}
</div>


@endsection
@push('scripts')
	<script src="{{ mix('/js/eventos/eventos.js') }}" defer ></script>
@endpush
@push('estilos')
	<link href="{{ mix('/css/eventos/eventos.css') }}" rel="stylesheet">
@endpush

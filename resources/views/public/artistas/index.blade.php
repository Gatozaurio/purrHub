@extends('layouts.app')

@section('title', 'Artistas')

@section('content')


<h1>Lista de artistas</h1>
@auth
   <a href="/artistas/crear" class="btn btn-success mb-10"><i class="fas fa-plus"></i> Nuevo artista</a>
@endauth

<div class="row">
 @forelse ($artists as $artist)
   <div data-idElemento="{{ $artist['id'] }}" class=" mr-lg-4 mr-md-2 mt-4 col-12 col-lg-3 col-md-6">
   <div class="card" style="width: 18rem;">
	   <div class="card-header">
		   <h5 class="text-center"><strong>{{ $artist['name'] }}</strong></h5>
	   </div>
	   <div class="card-body">
		   <img class="card-img-top" class="img-responsive img-rounded" src="{{ $artist['image'] }}" alt="Imágen del artista">
		   <h5 class="card-subtitle my-2 text-muted"><a href="/artistas/{{ $artist['slug'] }}/conciertos"><span class="badge badge-primary">{{ $artist->concerts->count() }}</span> {{ str_plural("Concierto", $artist->concerts->count())}}</a><br></h5>

		   <div class='btn-group d-flex'>
		   		<!-- Botón ver -->
			   <a href="/artistas/{{ $artist['slug'] }}" class="btn btn-primary border border-primary rounded ml-auto mr-1 col-4" data-toggle="tooltip" title="Ver artista" data-placement="bottom" data-template="@include('partials.tooltipTemplate')"><i class="fas fa-eye"></i></a>
			   @auth
			   		<!-- Botón editar -->
					<a href="/artistas/{{ $artist['id'] }}/editar" class="btn btn-primary border border-primary rounded mx-1 col-4" data-toggle="tooltip" title="Editar artista" data-placement="bottom" data-template="@include('partials.tooltipTemplate')"><i class="fas fa-edit"></i></a>
					<!-- Botón borrar -->
					<form action="/artistas/{{ $artist['id'] }}" data-elemento="artistas" data-action="delete" data-elementoBorrar="{{ $artist['id'] }}" method="post">
						@csrf
						@method('delete')
						<button type="submit" class="btn btn-danger ml-lg-5" data-toggle="tooltip" title="Borrar artista" data-placement="bottom" data-template="@include('partials.tooltipTemplate')"><i class="fas fa-trash-alt"></i></a>
					</form>
			   @endauth
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

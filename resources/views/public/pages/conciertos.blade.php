@extends('layouts.app')

@section('title', 'Conciertos')

@section('content')
 <h1>Lista de conciertos</h1>
 <a href="/conciertos/crear" class="btn btn-success mb-10">Nuevo concierto</a>

<div class="row">
  @forelse ($concerts as $concert)

  <div class="card mr-4 mt-4" style="width: 18rem;">
   <div class="card-body">
     <h5 class="card-title">{{ $concert['name'] }}</h5>
     <h6 class="card-subtitle mb-2 text-muted">{{ $concert['price'] }} €</h6>
     <p class="card-text">{{ $concert['location'] }}</p>
     <div class='btn-group'>
     <a href="/conciertos/{{ $concert['slug'] }}" class="btn btn-info border border-info rounded mr-1">Ver</a>
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

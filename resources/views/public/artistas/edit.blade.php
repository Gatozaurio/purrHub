@extends('layouts.app')

@section('title', 'Editar artista')

@section('content')
<form action="/artistas/{{$artist->id}}" method="post" novalidate>

 <!-- {{ csrf_field()}} -->
 @csrf <!-- Certificate Signing Request - Crea las sesiones -->
 @method('PATCH')

 @include('public.artistas.partials.form')

  <button type="submit" class="btn btn-primary">Guardar</button>

 </div>
</form>
@endsection

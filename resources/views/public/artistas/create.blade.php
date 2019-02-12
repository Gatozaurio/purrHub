@extends('layouts.app')

@section('title', 'Nuevo artista')

@section('content')
<h1 class="titulo">Crear nuevo artista</h1>
<form action="/artistas" method="post">

  <!-- {{ csrf_field()}} -->
  @csrf <!-- Certificate Signing Request - Crea las sesiones -->

  @include('public.artistas.partials.form')

   <button type="submit" class="btn btn-primary">Guardar</button>

  </div>
</form>
@endsection

@push('estilos')
	<link href="{{ mix('css/formularios/formulario.css') }}" rel="stylesheet">
@endpush

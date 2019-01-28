@extends('layouts.app')

@section('title', 'Nuevo concierto')

@section('content')
<form action="/conciertos" method="post">

  <!-- {{ csrf_field()}} -->
  @csrf <!-- Certificate Signing Request - Crea las sesiones -->

  @include('public.conciertos.partials.form')

   <button type="submit" class="btn btn-primary">Guardar</button>

  </div>
</form>
@endsection

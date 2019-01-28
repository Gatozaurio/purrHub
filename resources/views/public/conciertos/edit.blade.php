@extends('public.layout')

@section('title', 'Editar concierto')

@section('content')
<form action="/conciertos/{{$concierto->id}}" method="post" novalidate>

 <!-- {{ csrf_field()}} -->
 @csrf <!-- Certificate Signing Request - Crea las sesiones -->
 @method('PATCH')

 @include('public.conciertos.partials.form')

  <button type="submit" class="btn btn-primary">Guardar</button>

 </div>
</form>
@endsection

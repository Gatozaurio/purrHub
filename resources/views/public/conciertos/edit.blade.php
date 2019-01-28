@extends('layouts.app')

@section('title', 'Editar concierto')

@section('content')
<form action="/conciertos/{{$concert->id}}" method="post" novalidate>

 <!-- {{ csrf_field()}} -->
 @csrf <!-- Certificate Signing Request - Crea las sesiones -->
 @method('PATCH')

 @include('public.conciertos.partials.form')

  <button type="submit" class="btn btn-primary">Guardar</button>

 </div>
</form>
@endsection

<li class="list-group-item">
    <h4>
        {{ $comentario->user['name']}}
    </h4>
    <p>{{ $comentario->message}}</p>
    <!-- Botón editar -->
    <a href="/comentarios/{{ $concert['id'] }}/editar" class="btn btn-primary border border-primary rounded mx-1 col-4" data-toggle="tooltip" title="Editar concierto" data-placement="bottom" data-template="@include('partials.tooltipTemplate')"><i class="fas fa-edit"></i></a>
	<!-- Botón borrar -->
	<form action="/conciertos/{{ $concert['id'] }}"  data-elemento="conciertos" data-action="delete" data-elementoBorrar="{{ $concert['id'] }}" method="post">
	@csrf
	@method('delete')
    <button type="submit" class="btn btn-danger ml-lg-5" data-toggle="tooltip" title="Borrar concierto" data-placement="bottom" data-template="@include('partials.tooltipTemplate')"><i class="fas fa-trash-alt"></i></a>
</li>

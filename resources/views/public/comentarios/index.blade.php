<li class="list-group-item md" data-elementoEditar="{{ $comentario['id'] }}">
    <h4>
        <span>{{ $comentario->user['name']}}</span>
    </h4>
    <span>{{ $comentario->message}}</span>
        <!-- Botón editar -->
        @auth
        @can('modify', $comentario)
        <form action="#" data-action="edit"  method="post" >
            @csrf
            @method('put')
            <button type="submit" class="btn btn-primary ml-auto btn-md mt-2 col-1"><i class="fas fa-edit" ></i></button>
        </form>
        @endcan
        @endauth
</li>


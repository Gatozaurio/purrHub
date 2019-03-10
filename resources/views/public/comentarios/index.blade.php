<li class="list-group-item">
    <h4>
        {{ $comentario->user['name']}}
    </h4>
        <div class="row">
        <p>{{ $comentario->message}}</p>
        <!-- Botón editar -->
        <button type="button" id="editButton" class="btn btn-primary col-1 ml-auto mr-3" data-toggle="tooltip" title="Editar comentario" data-placement="bottom" data-template="@include('partials.tooltipTemplate')"><i class="fas fa-edit"></i>
    </div>
</li>


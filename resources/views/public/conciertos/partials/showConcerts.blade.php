@forelse ($concerts as $concert)
	<div data-idElemento="{{ $concert['id'] }}" class=" mr-lg-4 mr-md-2 mt-4 col-12 col-lg-3 col-md-6">
		<div class="card" style="width: 18rem;">
			<div class="card-header">
				<h5 class="text-center"><strong>{{ $concert['name'] }}</strong></h5>
			</div>

			<div class="card-body">
				<img class="card-img-top" class="img-responsive img-rounded" src="{{ $concert->artists[0]->image }}" alt="Concierto">
				<h6 class="card-subtitle my-2 text-muted">{{ $concert['price'] }} €</h6>
				<h5 class="card-text">{{ $concert['location'] }}</h5>
				<div class='btn-group d-flex'>
					<!-- Botón ver -->
					<a href="/conciertos/{{ $concert['slug'] }}" class="btn btn-primary border border-primary rounded ml-auto mr-1 col-4" data-toggle="tooltip"
					title="Ver concierto" data-placement="bottom" data-template="@include('partials.tooltipTemplate')"><i class="fas fa-eye"></i></a>
					@auth
						<!-- Botón editar -->
						<a href="/conciertos/{{ $concert['id'] }}/editar" class="btn btn-primary border border-primary rounded mx-1 col-4" data-toggle="tooltip" title="Editar concierto" data-placement="bottom" data-template="@include('partials.tooltipTemplate')"><i class="fas fa-edit"></i></a>
						<!-- Botón borrar -->
						<form action="/conciertos/{{ $concert['id'] }}"  data-elemento="conciertos" data-action="delete" data-elementoBorrar="{{ $concert['id'] }}" method="post">
							@csrf
							@method('delete')
							<button type="submit" class="btn btn-danger ml-lg-5" data-toggle="tooltip" title="Borrar concierto" data-placement="bottom" data-template="@include('partials.tooltipTemplate')"><i class="fas fa-trash-alt"></i></a>
						</form>
					@endauth
				</div>
			</div>
		</div>
	</div>
	@empty
	<p>No hay conciertos</p>
	@endforelse
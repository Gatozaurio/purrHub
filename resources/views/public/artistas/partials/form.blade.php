<div class="form-group">
	<label for="name">Nombre</label>
	<input type="text" class="form-control {{ $errors->has('name')?"is-invalid":""}}" id="name" name="name" placeholder="Nombre del artista" value="{{ isset($artist)?$artist->name : old('name') }}">
	@if ( $errors->has('name') )
		<div class="invalid-feedback">
			{{ $errors->first('name') }}
		</div>
	@endif
</div>

<div class="form-group">
	<label for="name">Imagen</label>
	<input type="text" class="form-control {{ $errors->has('image')?"is-invalid":""}}" id="image" name="image" placeholder="Imagen del artista" value="{{ isset($artist)?$artist->image : old('image') }}">
	@if ( $errors->has('image') )
		<div class="invalid-feedback">
			{{ $errors->first('image') }}
		</div>
	@endif
</div>

<div class="form-group">
	<label for="info">Información</label>
	<textarea class="form-control {{ $errors->has('info')?"is-invalid":""}}" id="info" name="info" placeholder="Información acerca del artista">{{ isset($artist)?$artist->info : old('info') }}</textarea>
	@if ( $errors->has('info') )
		<div class="invalid-feedback">
			{{ $errors->first('info') }}
		</div>
	@endif
</div>

<div class="form-group">
	<label for="name">Página web</label>
	<input type="text" class="form-control {{ $errors->has('web')?"is-invalid":""}}" id="web" name="web" placeholder="Página oficial del artista" value="{{ isset($artist)?$artist->web : old('web') }}">
	@if ( $errors->has('web') )
		<div class="invalid-feedback">
			{{ $errors->first('web') }}
		</div>
	@endif
</div>

<div class="form-group">
	<label for="name">Spotify</label>
	<input type="text" class="form-control {{ $errors->has('spotify')?"is-invalid":""}}" id="spotify" name="spotify" placeholder="Enlace al artista en spotify" value="{{ isset($artist)?$artist->spotify : old('spotify') }}">
	@if ( $errors->has('spotify') )
		<div class="invalid-feedback">
			{{ $errors->first('spotify') }}
		</div>
	@endif
</div>

<div class="form-group">
	<label for="name">Youtube</label>
	<input type="text" class="form-control {{ $errors->has('youtube')?"is-invalid":""}}" id="youtube" name="youtube" placeholder="Enlace al canal de youtube del artista" value="{{ isset($artist)?$artist->youtube : old('youtube') }}">
	@if ( $errors->has('youtube') )
		<div class="invalid-feedback">
			{{ $errors->first('youtube') }}
		</div>
	@endif
</div>

<div class="form-group">
	<label for="name">Instagram</label>
	<input type="text" class="form-control {{ $errors->has('instagram')?"is-invalid":""}}" id="instagram" name="instagram" placeholder="Enlace a la cuenta de instagram del artista" value="{{ isset($artist)?$artist->instagram : old('instagram') }}">
	@if ( $errors->has('instagram') )
		<div class="invalid-feedback">
			{{ $errors->first('instagram') }}
		</div>
	@endif
</div>

<div class="form-group">
	<label for="name">Twitter</label>
	<input type="text" class="form-control {{ $errors->has('twitter')?"is-invalid":""}}" id="twitter" name="twitter" placeholder="Enlace a la cuenta de twitter del artista" value="{{ isset($artist)?$artist->twitter : old('twitter') }}">
	@if ( $errors->has('twitter') )
		<div class="invalid-feedback">
			{{ $errors->first('twitter') }}
		</div>
	@endif
</div>

<div class="form-group">
	<label for="name">Facebook</label>
	<input type="text" class="form-control {{ $errors->has('facebook')?"is-invalid":""}}" id="facebook" name="facebook" placeholder="Enlace a la cuenta de facebook del artista" value="{{ isset($artist)?$artist->facebook : old('facebook') }}">
	@if ( $errors->has('facebook') )
		<div class="invalid-feedback">
			{{ $errors->first('facebook') }}
		</div>
	@endif
</div>

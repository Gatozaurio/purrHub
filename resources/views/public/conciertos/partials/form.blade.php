<div class="form-group">
 <label for="name">Nombre</label>
 <input type="text" class="form-control {{ $errors->has('name')?"is-invalid":""}}" id="name" name="name" placeholder="Nombre para el evento" value="{{ isset($concert)?$concert->name : old('name') }}">
 @if ( $errors->has('name') )
 <div class="invalid-feedback">
  {{ $errors->first('name') }}
 </div>
@endif
</div>

<div class="form-group">
 <label for="artists">Artistas</label>
 <textarea class="form-control {{ $errors->has('artists')?"is-invalid":""}}" id="artists" name="artists" placeholder="Artistas que participan">{{ isset($concert)?$concert->artists : old('artists') }}</textarea>
 @if ( $errors->has('artists') )
 <div class="invalid-feedback">
  {{ $errors->first('artists') }}
 </div>
@endif
</div>

<div class="form-group">
 <label for="price">Precio</label>
 <input type="text" class="form-control {{ $errors->has('price')?"is-invalid":""}}" id="price" name="price" placeholder="Precio en euros" value="{{ isset($concert)?$concert->price : old('price') }}">
 @if ( $errors->has('price') )
 <div class="invalid-feedback">
  {{ $errors->first('price') }}
 </div>
@endif
</div>

<div class="form-group">
 <label for="city">Ciudad</label>
 <input type="text" class="form-control {{ $errors->has('city')?"is-invalid":""}}" id="city" name="city" placeholder="Ciudad donde se realiza" value="{{ isset($concert)?$concert->city : old('city') }}">
 @if ( $errors->has('city') )
 <div class="invalid-feedback">
  {{ $errors->first('city') }}
 </div>
@endif
</div>

<div class="form-group">
 <label for="location">Ubicación</label>
 <input type="text" class="form-control {{ $errors->has('location')?"is-invalid":""}}" id="location" name="location" placeholder="Lugar donde se aloja el evento" value="{{ isset($concert)?$concert->location : old('location') }}">
 @if ( $errors->has('location') )
 <div class="invalid-feedback">
  {{ $errors->first('location') }}
 </div>
@endif
</div>

<div class="form-group">
 <label for="address">Dirección</label>
 <input type="text" class="form-control {{ $errors->has('address')?"is-invalid":""}}" id="address" name="address" placeholder="Dirección del lugar de celebración" value="{{ isset($concert)?$concert->address : old('address') }}">
 @if ( $errors->has('address') )
 <div class="invalid-feedback">
  {{ $errors->first('address') }}
 </div>
@endif
</div>

<div class="form-group">
 <label for="date">Fecha del evento</label>
 <input type="date" class="form-control {{ $errors->has('date')?"is-invalid":""}}" id="date" name="date" value="{{ isset($concert)?$concert->date : old('date') }}">
 @if ( $errors->has('date') )
 <div class="invalid-feedback">
  {{ $errors->first('date') }}
 </div>
@endif
</div>

<div class="form-group">
 <label for="schedule">Horario</label>
 <textarea class="form-control {{ $errors->has('schedule')?"is-invalid":""}}" id="schedule" name="schedule" placeholder="Horario del evento, apertura, comienzo, etc.">{{ isset($concert)?$concert->schedule : old('schedule') }}</textarea>
 @if ( $errors->has('schedule') )
 <div class="invalid-feedback">
  {{ $errors->first('schedule') }}
 </div>
@endif
</div>

<div class="form-group">
 <label for="ticket">Ticket</label>
 <input type="text" class="form-control {{ $errors->has('ticket')?"is-invalid":""}}" id="ticket" name="ticket" placeholder="Link para comprar la entrada" value="{{ isset($concert)?$concert->ticket : old('ticket') }}">
 @if ( $errors->has('ticket') )
 <div class="invalid-feedback">
  {{ $errors->first('ticket') }}
 </div>
@endif
</div>

<div class="form-group">
 <label for="info">Información</label>
 <textarea class="form-control {{ $errors->has('info')?"is-invalid":""}}" id="info" name="info" placeholder="Información acerca del evento">{{ isset($concert)?$concert->info : old('info') }}</textarea>
 @if ( $errors->has('info') )
 <div class="invalid-feedback">
  {{ $errors->first('info') }}
 </div>
@endif
</div>

<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" value="{{ old('Nombre', $libro?->Nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('Nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="autor" class="form-label">{{ __('Autor') }}</label>
            <input type="text" name="Autor" class="form-control @error('Autor') is-invalid @enderror" value="{{ old('Autor', $libro?->Autor) }}" id="autor" placeholder="Autor">
            {!! $errors->first('Autor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechapublicacion" class="form-label">{{ __('Fecha de publicación') }}</label>
            <input type="text" name="Fechapublicacion" class="form-control @error('Fechapublicacion') is-invalid @enderror" value="{{ old('Fechapublicacion', $libro?->Fechapublicacion) }}" id="fechapublicacion" placeholder="Fecha de publicación">
            {!! $errors->first('Fechapublicacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="Descripcion" class="form-control @error('Descripcion') is-invalid @enderror" value="{{ old('Descripcion', $libro?->Descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('Descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
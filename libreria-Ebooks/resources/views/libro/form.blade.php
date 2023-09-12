<div class="box box-info padding-1">
    <div class="box-body">
        {{-- Select --}}
        <div class="form-group">
            {{ Form::label('Selecciona Categoría') }}
            {{ Form::select('idCategoria', $categorias ,$libro->idCategoria, ['class' => 'form-control' . ($errors->has('idCategoria') ? ' is-invalid' : '')]) }}
            {!! $errors->first('idCategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('nombreLibro') }}
            {{ Form::text('nombreLibro', $libro->nombreLibro, ['class' => 'form-control' . ($errors->has('nombreLibro') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nombreLibro', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('autorLibro') }}
            {{ Form::text('autorLibro', $libro->autorLibro, ['class' => 'form-control' . ($errors->has('autorLibro') ? ' is-invalid' : '')]) }}
            {!! $errors->first('autorLibro', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('descripcionLibro') }}
            {{ Form::text('descripcionLibro', $libro->descripcionLibro, ['class' => 'form-control' . ($errors->has('descripcionLibro') ? ' is-invalid' : '')]) }}
            {!! $errors->first('descripcionLibro', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Añadir Libro') }}</button>
    </div>
</div>

<div class="box box-info padding-1">
    <div class="box-body">
        {{-- Select --}}
        <div class="form-group">
            {{ Form::label('categoría') }}
            {{ Form::select('idCategoria', $categorias, $libro->idCategoria, ['class' => 'form-control' . ($errors->has('idCategoria') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar Categoría']) }}
            {!! $errors->first('idCategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombreLibro', $libro->nombreLibro, ['class' => 'form-control' . ($errors->has('nombreLibro') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nombreLibro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::text('autorLibro', $libro->autorLibro, ['class' => 'form-control' . ($errors->has('autorLibro') ? ' is-invalid' : '')]) }}
            {!! $errors->first('autorLibro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcionLibro', $libro->descripcionLibro, ['class' => 'form-control' . ($errors->has('descripcionLibro') ? ' is-invalid' : '')]) }}
            {!! $errors->first('descripcionLibro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
    </div>
    <br>
</div>

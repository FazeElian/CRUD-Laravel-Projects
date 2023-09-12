<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('nombre Categoria') }}
            {{ Form::text('nombreCategoria', $categoria->nombreCategoria, ['class' => 'form-control' . ($errors->has('nombreCategoria') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nombreCategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción Categoria') }}
            {{ Form::text('descripcionCategoria', $categoria->descripcionCategoria, ['class' => 'form-control' . ($errors->has('descripcionCategoria') ? ' is-invalid' : '')]) }}
            {!! $errors->first('descripcionCategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear Categoría') }}</button>
    </div>
</div>

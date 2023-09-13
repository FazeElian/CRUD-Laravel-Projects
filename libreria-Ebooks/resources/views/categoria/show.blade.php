@extends('layouts.app')

@section('template_title')
    {{ $categoria->name ?? "{{ __('Ver') Categoria" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Categoría: {{ $categoria->nombreCategoria }}</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $categoria->nombreCategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $categoria->descripcionCategoria }}
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <a class="btn btn-primary my-5" href="{{ route('categorias.index') }}"> {{ __('Volver') }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? "{{ __('Ver') Libro" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Libro: {{ $libro->nombreLibro }} </span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $libro->nombreLibro }}
                        </div>
                        <div class="form-group">
                            <strong>Categoría:</strong>
                            {{ $libro->categoria->nombreCategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $libro->autorLibro }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción :</strong>
                            {{ $libro->descripcionLibro }}
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <a class="btn btn-primary my-5" href="{{ route('libros.index') }}"> {{ __('Volver') }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection

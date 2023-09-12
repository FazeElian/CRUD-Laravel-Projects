@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? "{{ __('Show') Libro" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idlibro:</strong>
                            {{ $libro->idLibro }}
                        </div>
                        <div class="form-group">
                            <strong>Idcategoria:</strong>
                            {{ $libro->idCategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrelibro:</strong>
                            {{ $libro->nombreLibro }}
                        </div>
                        <div class="form-group">
                            <strong>Autorlibro:</strong>
                            {{ $libro->autorLibro }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcionlibro:</strong>
                            {{ $libro->descripcionLibro }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

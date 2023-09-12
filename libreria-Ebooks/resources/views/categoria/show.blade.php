@extends('layouts.app')

@section('template_title')
    {{ $categoria->name ?? "{{ __('Show') Categoria" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Categoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Idcategoria:</strong>
                            {{ $categoria->idCategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Categoria:</strong>
                            {{ $categoria->nombreCategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción Categoria:</strong>
                            {{ $categoria->descripcionCategoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Libro
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Nuevo') }} Libro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('libros.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('libro.form')
                            <div class="box-footer mt20">
                                <button type="submit" class="btn btn-primary">{{ __('Añadir Libro') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts/main')

@section('titulo_pagina', 'Modificar los datos de la respuesta')

@section('contenido')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Modificar datos de') }} respuesta</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('returnmail.update', $returnmail->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('returnmail.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

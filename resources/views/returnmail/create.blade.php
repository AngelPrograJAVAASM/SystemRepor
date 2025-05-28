@extends('layouts/main')

@section('titulo_pagina', 'Registra un respuesta')

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Reegistra') }} respuesta</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('returnmail.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('returnmail.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

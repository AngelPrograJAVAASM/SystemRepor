@extends('layouts/main')

@section('titulo_pagina', 'Crear requesicion')

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear reporte') }} Rpt</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('rpt.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('rpt.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

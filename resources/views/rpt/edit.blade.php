@extends('layouts/main')

@section('titulo_pagina', 'Cambiar datos de la requesicion')

@section('contenido')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Modificar datos del reporte</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('rpt.update', $rpt->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('rpt.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

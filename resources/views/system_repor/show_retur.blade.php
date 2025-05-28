@extends('layouts/main')

@section('titulo_pagina', 'Ver respuesta')

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver datos') }} de la repuesta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('indexSeeRtq') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Numero de la respuesta:</strong>
                                    {{ $returnmail->id}}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descrision:</strong>
                                    {{ $returnmail->description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Especificasion:</strong>
                                    {{ $returnmail->specifications }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lugar donde se realizo el servicio:</strong>
                                    {{ $returnmail->site }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Empleado que realiso la respuesta:</strong>
                                    {{ $returnmail->id_employ }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Respuesta del reporte:</strong>
                                    {{ $returnmail->id_rpt }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

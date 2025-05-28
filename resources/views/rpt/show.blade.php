@extends('layouts/main')

@section('titulo_pagina', 'Ver requesicion')

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver detalles del reporte') }} </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('rpt.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Numero de reporte:</strong>
                                    {{ $rpt->id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descrision:</strong>
                                    {{ $rpt->description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Espesificasiones:</strong>
                                    {{ $rpt->specifications }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lugar del reporte:</strong>
                                    {{ $rpt->site }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Atendido:</strong>
                                    {{ $rpt->attended}}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Empleado que reporto:</strong>
                                    {{ $rpt->id_employ }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

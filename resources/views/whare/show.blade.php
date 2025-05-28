@extends('layouts/main')

@section('titulo_pagina', 'Ver el material para el almacen')

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Whare</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('whares.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Number Material:</strong>
                                    {{ $whare->id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $whare->description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Specifications:</strong>
                                    {{ $whare->specifications }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo:</strong>
                                    {{ $whare->tipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo:</strong>
                                    {{ $whare->quantity }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Costo de material:</strong>
                                    {{ $whare->cost_reqs }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Numero de requecision:</strong>
                                    {{ $whare->number_reqs }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

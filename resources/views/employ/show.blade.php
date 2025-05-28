@extends('layouts/main')

@section('titulo_pagina', 'Ver empleados')

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Employ</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('employ.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $employ->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Type:</strong>
                                    {{ $employ->type }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pass:</strong>
                                    {{ $employ->pass }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

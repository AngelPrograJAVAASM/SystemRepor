@extends('layouts/main')

@section('titulo_pagina', 'Home')

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ver requecision</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('req.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Numero de requecision:</strong>
                                    {{ $req->id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Costo de requecision:</strong>
                                    {{ $req->all_reqs }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Numero de material:</strong>
                                    {{ $req->numeber_material }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

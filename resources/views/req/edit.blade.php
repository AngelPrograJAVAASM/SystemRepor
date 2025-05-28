@extends('layouts/main')

@section('titulo_pagina', 'Home')

@section('contenido')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualiar requecision') }} Req</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('req.update', $req->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('req.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

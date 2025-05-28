@extends('layouts/main')

@section('titulo_pagina', 'Registra un nuevo material para el almacen')

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }}Registran material</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('whare.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('whare.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts/main')

@section('titulo_pagina', 'Cambiar la informacion de los empleados')

@section('contenido')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Employ</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('employ.update', $employ->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('employ.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

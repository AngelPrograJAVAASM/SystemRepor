@extends('layouts/main')

@section('titulo_pagina', 'Reportar')

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('') }}Hacer reporte</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST"  action="{{ route('storeSysr')}}" >
                                        @csrf

                                        <div class="form-group mb-2 mb20">
                                            <label for="id_employ" class="form-label">{{ __('Quien eres ?') }}</label>
                                            <select name="id_employ" id="id_employ" class="form-select" >
                                            @foreach($lista as $emy)
                                                <option id="id_employ" value="{{$emy->id}}"> {{$emy->id}} | {{$emy->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group mb-2 mb20">
                                            <label for="description" class="form-label">{{ __('Descrision:') }}</label>
                                            <input type="text" name="description" class="form-control" id="description" placeholder="Descrision">
                                        </div>

                                        <div class="form-group mb-2 mb20">
                                            <label for="specifications" class="form-label">{{ __('Especificasiones:') }}</label>
                                            <input type="text" name="specifications" class="form-control" id="specifications" placeholder="Especificasiones">
                                        </div>

                                        <div class="form-group mb-2 mb20">
                                            <label for="site" class="form-label">{{ __('Lugar del reportes:') }}</label>
                                            <input type="text" name="site" class="form-control" id="site" placeholder="Costo de material:">
                                        </div>

                                        <button class="btn btn-primary mt-4">Enviar reporte</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

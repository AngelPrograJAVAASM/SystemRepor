
@extends('layouts/main')

@section('titulo_pagina', 'Reportar')

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Rpt</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST"  action="{{ route('StoreReponr', $id)}}" >
                                        @csrf

                                        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Descrision') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $returnmail?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="specifications" class="form-label">{{ __('Especificasion') }}</label>
            <input type="text" name="specifications" class="form-control @error('specifications') is-invalid @enderror" value="{{ old('specifications', $returnmail?->specifications) }}" id="specifications" placeholder="Specifications">
            {!! $errors->first('specifications', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="site" class="form-label">{{ __('Lugar adonde se realiso servicio') }}</label>
            <input type="text" name="site" class="form-control @error('site') is-invalid @enderror" value="{{ old('site', $returnmail?->site) }}" id="site" placeholder="Site">
            {!! $errors->first('site', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
                <label for="id_employ" class="form-label">{{ __('Empleado que atendio el reporte') }}</label>
            <select name="id_employ" id="id_employ" class="form-select" >
            @foreach($employ as $pro)
                <option id="id_employ" value="{{$pro->id}}"> {{$pro->name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group mb-2 mb20">

                <label for="id_rpt" class="form-label">{{ __('Reporte de la repuesta') }}</label>
                <input type="number" name="id_rpt" class="form-control" id="id_rpt" placeholder="Costo de material:" value="{{ $id }}" disabled>

            </select>
        </div>

                                        <button class="btn btn-primary mt-4">Enviar reporte</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection

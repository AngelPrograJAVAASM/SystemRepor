@extends('layouts/main')

@section('titulo_pagina', 'Cambiar datos de la requesicion')

@section('contenido')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Modificar datos del reporte</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('UpdateRtpr', $rpt->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Descrision') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $rpt?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="specifications" class="form-label">{{ __('Especificasiones') }}</label>
            <input type="text" name="specifications" class="form-control @error('specifications') is-invalid @enderror" value="{{ old('specifications', $rpt?->specifications) }}" id="specifications" placeholder="Specifications">
            {!! $errors->first('specifications', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="site" class="form-label">{{ __('Lugar') }}</label>
            <input type="text" name="site" class="form-control @error('site') is-invalid @enderror" value="{{ old('site', $rpt?->site) }}" id="site" placeholder="Site">
            {!! $errors->first('site', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
                <label for="id_employ" class="form-label">{{ __('Empleado que hiso el reporte') }}</label>
            <select name="id_employ" id="id_employ" class="form-select" >
            @foreach($lista as $pro)
                <option id="id_employ" value="{{$pro->id}}"> {{$pro->id}}</option>
            @endforeach
            </select>
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

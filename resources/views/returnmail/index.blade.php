@extends('layouts/main')

@section('titulo_pagina', 'Respuestas')

@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Respuesta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('returnmail.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registra respuesta') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

									<th >Numero de respuesta</th>
									<th >Descrision</th>
									<th >Espesificasiones</th>
									<th >Lugar</th>
									<th >Empleado que realiso la respuesta</th>
                                    <th >Respuesta del reporte</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($returnmails as $returnmail)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $returnmail->id }}</td>
										<td >{{ $returnmail->description }}</td>
										<td >{{ $returnmail->specifications }}</td>
										<td >{{ $returnmail->site }}</td>
										<td >{{ $returnmail->id_employ }}</td>
                                        <td >{{ $returnmail->id_rpt  }}</td>

                                            <td>
                                                <form action="{{ route('returnmail.destroy', $returnmail->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('returnmail.show', $returnmail->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('returnmail.edit', $returnmail->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Modificar datos') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Seguro que quieres eliminarlo') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $returnmails->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection

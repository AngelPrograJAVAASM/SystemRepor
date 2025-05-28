@extends('layouts/main')

@section('titulo_pagina', 'Requesiciones')

@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reportes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('rpt.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registra reporte') }}
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

									<th >Numero de reporte</th>
									<th >Descrision</th>
									<th >Especificasiones</th>
									<th >Lugar</th>
									<th >Atendido</th>
									<th >Empleado que reporto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rpts as $rpt)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $rpt->id }}</td>
										<td >{{ $rpt->description }}</td>
										<td >{{ $rpt->specifications }}</td>
										<td >{{ $rpt->site }}</td>
										<td >{{ $rpt->attended}}</td>
										<td >{{ $rpt->id_employ }}</td>

                                            <td>
                                                <form action="{{ route('rpt.destroy', $rpt->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('rpt.show', $rpt->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('rpt.edit', $rpt->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Modificar datos') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Seguro que quieres eliminarlo?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $rpts->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection

@extends('layouts/main')

@section('titulo_pagina', 'Almacen')

@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Almacen') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('whare.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registra nuevo material') }}
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

									<th >Number Maaterial</th>
									<th >Description</th>
                                    <th >Especificasion</th>
									<th >Tipo</th>
                                    <th >Cantidad</th>
									<th >Costo de material</th>
									<th >Numero de requecision</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($whares as $whare)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $whare->id }}</td>
										<td >{{ $whare->description }}</td>
										<td >{{ $whare->specifications }}</td>
										<td >{{ $whare->tipo }}</td>
                                        <td >{{ $whare->quantity }}</td>
										<td >{{ $whare->cost_reqs }}</td>
										<td >{{ $whare->number_reqs }}</td>

                                            <td>
                                                <form action="{{ route('whare.destroy', $whare->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('whare.show', $whare->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver material') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('whare.edit', $whare->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar datos material') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Quieres eliminarlo?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar registro del material') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $whares->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection

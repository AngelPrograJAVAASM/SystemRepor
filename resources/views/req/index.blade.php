@extends('layouts/main')

@section('titulo_pagina', 'Home')

@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Requecision') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('req.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear') }}
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
                                        <th>No. Lista</th>

									<th >Numero de requecision</th>
									<th >Costo total</th>
									<th >Cantidad de material</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reqs as $req)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $req->id }}</td>
										<td >{{ $req->all_reqs }}</td>
										<td >{{ $req->numeber_material }}</td>

                                            <td>
                                                <form action="{{ route('req.destroy', $req->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('req.show', $req->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('req.edit', $req->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $reqs->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection

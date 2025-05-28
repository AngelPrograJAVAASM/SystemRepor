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
                                {{ __('Reportes hechos') }}
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
                                <thead class="thead">
                                <table id = "tablap" class="table table-striped table-hover">
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
										<td class="{{ $rpt->attended == 1 ? 'atendido' : '' }}">
                                        {{ $rpt->attended == 1 ? 'Atendido' : '' }}
                                        {{ $rpt->attended == 0 ? 'No atendido' : '' }}
                                        </td>
										<td >{{ $rpt->id_employ }}</td>


                                            <td>
                                                <form action="{{ route('CreaReponr', $rpt->id) }}" method="GET" style="display: inline;">
                                                        <button type="submit" id ="mover" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-fw fa-eye"></i> {{ __('Responder') }}
                                                        </button>
                                                    </form>
                                                    <form action="{{ route('ShowRtqr', $rpt->id) }}" method="GET" style="display: inline;">
                                                        <button type="submit" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}
                                                        </button>
                                                    </form>

                                                <form action="{{ route('rpt.destroy', $rpt->id) }}" method="POST">

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Seguro que quieres eliminarlo?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>

                                            </td>
                                            <tbody id="tableBody">

                                    </tbody>
                                        </tr>
                                        <script src="jsFuciones/desativar.js"></script>

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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const filas = document.querySelectorAll("#tablap tbody tr");

    filas.forEach(fila => {
        const celdaAtendido = fila.querySelector("td:nth-child(6)");
        if (celdaAtendido && celdaAtendido.textContent.includes("Atendido")) {
            const botonMover = fila.querySelector("button#mover");
            if (botonMover) {
                botonMover.remove();
            }
        }
    });
});
    </script>


@endsection

@extends('layouts/main')

@section('titulo_pagina')
     Hacer requecision
@endsection

@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <a class="btn btn-primary btn-sm" href="{{ route('menu') }}"> {{ __('Menú') }}</a>
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Requecisiones') }}
                            </span>


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


                                    <form id="dataForm">

                                        <div class="form-group mb-2 mb20">
                                            <label for="description" class="form-label">{{ __('Descrision:') }}</label>
                                            <input type="text" name="description" class="form-control" id="description" placeholder="Descrision">
                                        </div>

                                        <div class="form-group mb-2 mb20">
                                            <label for="tipo" class="form-label">{{ __('Tipo') }}</label>
                                            <select name="tipo" id="tipo" class="form-select" >
                                                <option id="tipo" > {{ "Cumputo" }} </option>
                                                <option id="tipo" > {{ "Ofimatico" }} </option>
                                                <option id="tipo" > {{ "Muebles" }} </option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-2 mb20">
                                            <label for="can" class="form-label">{{ __('Cantidad:') }}</label>
                                            <input type="number" name="can" class="form-control" id="can" placeholder="Cantidad">
                                        </div>

                                        <div class="form-group mb-2 mb20">
                                            <label for="specifications" class="form-label">{{ __('Especificasiones:') }}</label>
                                            <input type="text" name="specifications" class="form-control" id="specifications" placeholder="Especificasiones">
                                        </div>

                                        <div class="form-group mb-2 mb20">
                                            <label for="cost_reqs" class="form-label">{{ __('Costo de material:') }}</label>
                                            <input type="number" step="any" name="cost_reqs" class="form-control" id="cost_reqs" placeholder="Costo de material:">
                                        </div>

                                        <button type="submit" class="btn btn-sm btn-primary">Realizar venta</button>
                                    </form>

                                    <form method="GET" action="{{ route('couter') }}">
"
                                        <button type="submit" class="btn btn-secondary btn-sm">Restaurar</button>

                                    </form>



                                <table class="table table-striped table-hover" id="html-table">
                                    <tr>
                                        <th>Numero de requesicion</th>

									<th >Descrision</th>
									<th >Especificasiones</th>
                                    <th >Tipo</th>
                                    <th >Cantidad</th>
                                    <th >Costo</th>
                                    <th >Sudtotal</th>
                                    <th >Funciones</th>

                                    </tr>


                                </thead>
                                <tbody id="tableBody">

                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan = "0">Total</td>
                                        <td id = "tdTotal" ></td>


                                    </tr>


                            </table>

                            <div class="form-group mb-2 mb20">
                                <label for="totalGen" class="form-label">{{ ('Total de venta general') }}</label>
                                <output type = "number" id= "totalGen" class = "form-control">
                            </div>

                            <div class="form-group mb-2 mb20">
                            <button id="save-data" class="btn btn-sm btn-primary">Registrar compra</button>
                            </div>


                                <form method="GET" action="{{ route('couter') }}">

                                    <div class="form-group mb-2 mb20">
                                    <button type="submit" id="botv"  class="btn btn-success btn-sm">Nueva venta</button>
                                    </div>

                                </form>



                        </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        let total = 0;
        let totalimp = 0;
        let totalGens = 0;
        let camrep = 0;
        let par3 = 0;

        let bot2 = document.getElementById("botv");
        let bot3 = document.getElementById("save-data");

        bot2.style.display = "none";

            // Seleccionar el formulario y la tabla
            const form = document.getElementById('dataForm');
            const tableBody = document.getElementById('tableBody');
            let i = 0;
            // Manejar el evento de envío del formulario
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Evita el envío estándar del formulario

                // Obtener valores de los campos del formulario

                var des = document.getElementById('description').value;
                var tipo = document.getElementById('tipo').value;
                var can = parseInt(document.getElementById('can').value);
                var spe = document.getElementById('specifications').value;
                var costr = parseFloat(document.getElementById('cost_reqs').value);

                total = 0;
                const rowValue = can * costr;
                total += Number(rowValue);




                if(isNaN(can) && des == "" && spe == "" && isNaN(costr) && isNaN(tipo)){

                // Crear una nueva fila
                form.reset();
                alert('Te falta algunas sentencias');

            }else{


                const newRow = document.createElement('tr');
                newRow.innerHTML = `

                    <td>${i = i + 1}</td>
                    <td>${des}</td>
                    <td>${spe}</td>
                    <td>${tipo}</td>
                    <td>${can}</td>
                    <td>${costr}</td>
                    <td>${total}</td>

                    <td><button onclick="eliminarFila(this)">Eliminar</button></td>



                `;

                // Agregar la nueva fila a la tabla
                tableBody.appendChild(newRow);

                form.reset();

                SumaTotal();



                // Limpiar los campos del formulario


            }

            });

            function eliminarFila(boton) {

                const fila = boton.parentNode.parentNode;


                fila.parentNode.removeChild(fila);
                i = i - 1;
                SumaTotal();
                form.reset();
            }

            function SumaTotal() {

             totalGens = 0;
                const table = document.getElementById("html-table");
                for (let i = 1; i < table.rows.length - 1; i++) {

                    const rowValueGT = table.rows[i].cells[6].innerHTML;
                    totalGens += Number(rowValueGT);

                    const rowValueGT1 = table.rows[i].cells[4].innerHTML;
                    camrep += Number(rowValueGT1);
                }

                document.getElementById("tdTotal").textContent = totalGens.toFixed(2);
                document.getElementById("totalGen").textContent = totalGens.toFixed(2);


            }

            $('#save-data').on('click', function () {
            // Captura datos de la tabla
            let data = [];

            const total = $('#tdTotal').text().trim(); // Captura el valor del output

            if (!total || isNaN(total)) {
            alert('El valor del total no es válido.');
            return;
            }

            $('#html-table #tableBody tr').each(function () {
                const row = $(this).find('td');
                data.push({
                    dre: row.eq(1).text().trim(),
                    spf: row.eq(2).text().trim(),
                    typ: row.eq(3).text().trim(),
                    cam: parseInt(row.eq(4).text().trim()),
                    cos: parseFloat(row.eq(5).text().trim())

                });


            });
        });






    </script>


@endsection

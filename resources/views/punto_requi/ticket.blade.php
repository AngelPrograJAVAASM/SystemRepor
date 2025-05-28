<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket de Venta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }
        .ticket {
            width: 300px;
            max-width: 300px;
            margin: auto;
            text-align: center;
        }
        .ticket-header {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .ticket-header img {
            max-width: 80%; /* Ajusta el ancho máximo de la imagen */
            height: auto; /* Mantiene la proporción */
            margin-bottom: 10px;
        }
        .ticket-body {
            text-align: left;
        }
        .ticket-footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            border-bottom: 1px solid #ddd;
        }
        th {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <div class="ticket-header">
            <img src="imagen/image.png" alt="Logo de la Empresa">
            <p>Ticket de Venta</p>
        </div>
        <div class="ticket-body">
            <p><strong>Detalle Venta ID:</strong> {{ $detalleVenta->id }} </p>
            <p><strong>Fecha de la venta:</strong> {{$detalleVenta->created_at}} </p>
            <table>
                <thead>

                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                     @php $total = 0; @endphp <!-- Inicializa el total -->
                    @foreach ($ventas as $venta)
                        @php
                            $subtotal = ($venta->can * $venta->pre); // Calcula el subtotal
                            $total += $subtotal; // Suma el subtotal al total
                        @endphp
                        <tr>
                            <td>{{ $venta->producto }}</td>
                            <td>{{ $venta->can }}</td>
                            <td>${{ number_format($venta->pre, 2) }}</td>
                            <td>${{ number_format($subtotal, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p><strong>Total:</strong> ${{ number_format($detalleVenta->tot_ven, 2) }}</p>
        </div>
        <div class="ticket-footer">
            <p>Gracias por su compra!</p>
        </div>
    </div>
</body>
</html>

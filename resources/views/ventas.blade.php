<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
</head>
<body>
    <h1>Listado de Ventas</h1>
    <table>
        <thead>
            <tr>
                <th>Código de Venta</th>
                <th>Fecha de Venta</th>
                <th>Código de Producto</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>ISV</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
            <tr>
                <td>{{ $venta->codigoVenta }}</td>
                <td>{{ $venta->fechaVenta }}</td>
                <td>{{ $venta->codigoProducto }}</td>
                <td>{{ $venta->cantidad }}</td>
                <td>{{ $venta->subtotal }}</td>
                <td>{{ $venta->isv }}</td>
                <td>{{ $venta->total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

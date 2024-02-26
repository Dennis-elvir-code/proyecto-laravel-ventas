<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar Productos</title>
</head>
<body>
    <div>
        <h1>¿Esta seguro que desea eliminar estos productos?</h1>
        <br>
                
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codigo Producto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">stock</th>
                </tr>
            </thead>
            <body>
                    <tr>
                        <td>{{ $producto->codigoProducto }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->stock }}</td>
                    </tr>
            </body>
        </table>
    </div>
    <div>
        <a href="{{route('producto.index')}}" class="btn btn-warning">Volver al inicio</a>
        <a href="{{route('producto.destroy', $producto->codigoProducto)}}" class="btn btn-danger">Eliminar Producto</a>

    </div>
</body>
</html>
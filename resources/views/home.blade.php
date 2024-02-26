<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Proyecto Ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Bienvenido a Proyecto Ventas</h1>
        <br>
        <br>
        <a href="{{route('producto.create')}}" class ="btn btn-primary" >Agregar Producto</a>
        <input type="button" name="crearnuevo" class ="btn btn-primary" value="Crear">
        <br>
        <br>
        <table>
            <thead>
                <tr>
                    <th scope="col">Codigo Producto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>

            </thead>
            <body>
                @foreach ($productos as $producto)
                   <tr>
                    <td>{{$producto->codigoProducto}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td> 
                        <a href="{{route('producto.edit', $producto->codigoProducto)}}">Editar</a>
                    </td>
                    <td>
                        <a href="{{route('producto.eliminar', $producto->codigoProducto)}}">Eliminar</a>
                    </td>
                    <td>
                        <form action="{{route('mostrar.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="codigoProducto" value="{{$producto->codigoProducto}}">
                            <button type="submit" class="btn btn-success">Agregar a Ventas</button>
                        </form>
                   </tr>

                    
                @endforeach
                
                
            </body>

        </table>
       
        </section>
    </main>
    <br>
    <br>
    <br>
    <footer>
        <p>Este es el contenido principal de la página de inicio.</p>
        </section>
        <p>Derechos de autor &copy; 2024 Proyecto Ventas</p>
    </footer>
</body>
</html>

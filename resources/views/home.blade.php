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
                <th>CodigoProducto</th>
                <th>nombre</th>
                <th>precio</th>
                <th>stock</th>


            </thead>
            <body>
                @foreach ($productos as $producto)
                   <tr>
                    <td>{{$producto->codigoProducto}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                   </tr>
                    
                @endforeach
                
                
            </body>

        </table>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/productos">Productos</a></li>
                <!-- Agrega aquí más enlaces de navegación según sea necesario -->
            </ul>
        </nav>
    </header>
    
    <main>
        <section>
            <h2>¡Bienvenido!</h2>
            <p>Este es el contenido principal de la página de inicio.</p>
        </section>
    </main>

    <footer>
        <p>Derechos de autor &copy; 2024 Proyecto Ventas</p>
    </footer>
</body>
</html>

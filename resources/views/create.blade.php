<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Agregar Producto</title>
</head>
<body>
    <h2>Agregar Producto</h2>

    <form action='{{route('producto.store')}}' method="POST">
        @csrf
        <div>
           <label >Codigo del producto:</label>
           <input type="text" name="codigoProducto">
        </div>
        <div>
            <label >Nombre:</label>
            <input type="text" name="name">
         </div>
         <div>
            <label >Precio:</label>
            <input type="text" name="precio">
         </div>
         <div>
            <label >Stock:</label>
            <input type="text" name="stock">
         </div>
         <div>
            <br>
            <button type="submit" class="btn btn-success">Agregar Producto</button>
         </div>
        </form>
    <br>
    <br>
    <br>
    
    <a href="{{route('producto.index')}}" class ="btn btn-primary" >volver al inicio</a>
    
</body>
</html>
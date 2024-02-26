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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <h2>Agregar Producto</h2>

    <form action='{{route('producto.store')}}' method="POST">
        @csrf
        <div class="form-group">
            <label for="codigoProducto">codigoProducto:</label>
           <input type="text" class="form-control" name="codigoProducto" id="codigoProducto"/>
        </div>
        <div class="form-group">
            <label for="nombre">nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre"/>
         </div>
         <div class="form-group">
            <label for="precio">precio:</label>
            <input type="text" class="form-control" name="precio" id="precio"/>
         </div>
         <div class="form-group">
            <label for="stock">stock:</label>
            <input type="text" class="form-control" name="stock" id="stock"/>
           </div>
           <br>
           <div class="form-group">
            <button type="submit" class="btn btn-success">Agregar Producto</button>
        </div>
    </form>
    <br>
    <a href="{{route('producto.index')}}" class ="btn btn-primary" >volver al inicio</a>
</div>
</div>
</div>
</body>
</html>
    
    
    
</body>
</html>

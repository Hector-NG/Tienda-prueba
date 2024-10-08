<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h2>Crear producto</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('products.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="number" class="form-control" name="price">
                        </div>             
                        <button type="submit" class="btn btn-primary">Guardar</button>  
                        <a href="{{route('products.list')}}" class="btn btn-danger">Cancelar</a>         
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
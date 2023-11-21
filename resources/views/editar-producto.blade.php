<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1>Editar Producto</h1>
        <form action="{{route('actualizar.producto',$producto->productoID)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Producto</label>
              <input type="text" class="form-control" name="producto" value={{ $producto->producto }} id="exampleInputEmail1" placeholder="Producto">
            </div>
                    
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" value={{ $producto->precio }} id="exampleInputEmail1"  placeholder="Precio">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Stock</label>
                <input type="text" class="form-control" name="stock" value={{ $producto->stock }} id="exampleInputEmail1"  placeholder="Stock">
            </div>
                    
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3">{{ $producto->descripcion }}</textarea>
            </div>

            <input type="text" hidden class="form-control" name="fotoeditar" value={{ $producto->foto }} id="exampleInputEmail1">
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-9">
                        <label for="formFile" class="form-label">Foto</label>
                        <input class="form-control" type="file" name="foto" value={{ $producto->foto }} id="input">
                    </div>
                    <div class="col-md-3">
                        <div>
                            <img src="{{asset('storage/'.$producto->foto) }}"  alt="" id="img" height = "60">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha Registro</label>
                <input type="text" class="form-control" name="fecharegistro" value={{ $producto->fecharegistro }} id="exampleInputEmail1"  placeholder="Fecha Registro">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria" value={{ $producto->categoria }} id="exampleInputEmail1"  placeholder="Categoria">
            </div>
                
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
            </div>
            <div class="col-md-4"></div>
        </div>
        
    </div>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</html>
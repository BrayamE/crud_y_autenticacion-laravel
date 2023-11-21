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
                <h1>Editar Persona</h1>
        <form action="{{route('actualizar.persona',$persona->personaID)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombres</label>
              <input type="text" class="form-control" name="nombres" value={{ $persona->nombres }} id="exampleInputEmail1" placeholder="Nombres">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="paterno" value={{ $persona->paterno }} id="exampleInputEmail1"  placeholder="Apellido Paterno">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="materno" value={{ $persona->materno }} id="exampleInputEmail1"  placeholder="Apellido Materno">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Bibliografia</label>
                <textarea class="form-control" name="bibliografia" id="exampleFormControlTextarea1" rows="3">{{ $persona->bibliografia }}</textarea>
            </div>
            
            <input type="text" hidden class="form-control" name="fotoeditar" value={{ $persona->foto }} id="exampleInputEmail1">
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-9">
                        <label for="formFile" class="form-label">Foto</label>
                        <input class="form-control" type="file" name="foto" value={{ $persona->foto }} id="input">
                    </div>
                    <div class="col-md-3">
                        <div>
                            <img src="{{asset('storage/'.$persona->foto) }}"  alt="" id="img" height = "60">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero de Documento</label>
                <input type="text" class="form-control" name="documento" value={{ $persona->documento }} id="exampleInputEmail1"  placeholder="Numero de Documento">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero de Celular</label>
                <input type="text" class="form-control" name="celular" value={{ $persona->celular }} id="exampleInputEmail1"  placeholder="Numero de Celular">
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
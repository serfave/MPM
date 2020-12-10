<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    @if (session('error'))
    <div>
        {{ session('error') }}
    </div>
    <br>
    @endif
    <form action="/validar" method="POST">
        @csrf
        <div class="form-group col-md-4">
             <label for="exampleInputEmail1">Correo Electrónico</label>
             <input type="" class="form-control" name="usuario" aria-describedby="emailHelp">
             <small id="emailHelp" class="form-text text-muted">No compartas tus datos con extraños >:(</small>
        </div>
        <div class="form-group col-md-4">
             <label for="exampleInputPassword1">Contraseña</label>
             <input type="password" class="form-control" name="password">
         </div>
       <div>
         <button type="submit" class="btn btn-primary" value="Enviar">Enviar</button>
         <a href="/" class="btn btn-primary">Regresar</a> 
       </div>
        
    </form>
</body>
</html>

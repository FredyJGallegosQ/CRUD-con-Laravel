<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384 MCw98/SFNGE8F3T3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkF03wJ8ERdknLPMO" cross origin="anonymous">
    <title>Editar</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <form action="/update/{{$alumnos[0]->cod_estudiante}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Código alumno</label>
                    <input type="text" class="form-control" name="codigo" id="cod_estudiante" value="{{$alumnos[0]->cod_estudiante}}" 
                    placeholder="Ingrese código del alumno">
                </div>
                <div class="form-group">
                    <label> Nombres alumno </label>
                    <input type="text" class="form-control" name="nombres" id="nombres" value="{{$alumnos[0]->nombres}}" 
                    placeholder="Ingrese nombres del alumno">
                </div>
                <div class="form-group">
                    <label> Apellidos alumno </label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{$alumnos[0]->apellidos}}" 
                    placeholder="Ingrese apellidos del alumno">
                </div>
                <div class="form-group">
                    <label> DNI alumno </label>
                    <input type="text" class="form-control" name="dni" id="dni" value="{{$alumnos[0]->dni}}" 
                    placeholder="Ingrese DNI del alumno">
                </div>    
                <button type="submit" name="submit" class="btn btn-primary" style="width: 50%;">Actualizar datos</button>
            </form>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384 MCw98/SFNGE8FJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkF0JwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Crear alumno</title>
</head>
<body>
    @if(\Session::has('success'))
    <div>
        <h4>{{\Session::get('success')}}</h4>
    </div>
    @endif
    <form action="/create" method="post">
        {{csrf_field()}}
        <div class="container">
            <div class="jumbotron" style="margin-top: 5%;"> 
                <h1> Crear Alumno </h1>
                <hr>
            <div class="form-group">
                <label>Código del alumno</label>
                <input type="text" class="form-control" name="codigo" placeholder="Ingrese código del alumno" >
            </div>
            <div class="form-group">
                <label>Nombres del alumno</label>
                <input type="text" class="form-control" name="nombres" placeholder="Ingrese nombres del alumno">
            </div>
            <div class="form-group">
                <label>Apellidos del alumno</label>
                <input type="text" class="form-control" name="apellidos" placeholder="Ingrese apellidos del alumno"> 
            </div>
            <div class="form-group">
                <label>DNI del alumno</label>
                <input type="text" class="form-control" name="dni" placeholder="Ingrese DNI del alumno"> 
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Save/Insert Data"> 
            </div>
        </div>
    </form>
</body>
</html>
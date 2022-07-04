<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384 MCw98/SFNGE8FJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkF0JwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Lista alumnos</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Lista de alumnos</h1> 
            <hr>
                <div class="line" style="text-align:center;">
                    <a href="/alumnocreate" class="btn btn-primary">Crear alumno</a>
                </div><br>
                <form>
                    <table class="table table-bordered"> 
                        <thead class="thead-dark">
                            <tr>
                                <th> Alumno Código </th>
                                <th> Alumno Nombres </th>
                                <th> Alumno Apellidos </th>
                                <th> Alumno DNI</th>
                                <th> EDIT </th>
                                <th> DELETE </th>
                            </tr>
                        <tbody>
                        </thead>
                        @foreach ($alumnos as $row)
                        <tr style="background: white;">
                            <td>{{ $row->cod_estudiante }}</td>
                            <td>{{ $row->nombres }}</td>
                            <td>{{ $row->apellidos }}</td>
                            <td>{{ $row->dni }}</td>
                            <td>
                                <a href="edit/{{$row->cod_estudiante}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <a href="/delete/{{$row->cod_estudiante}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                </form>
    </div>
</body>
</html>
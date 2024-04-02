<!DOCTYPE html>
<html>
<head>
    <title>Listado de Estudiantes</title>
</head>
<body>
    <h1>Listado de Estudiantes</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Código</th>
                <th>Teléfono</th>
                <th>Fecha de Nacimiento</th>
                <th>Escuela</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $estudiante)
            <tr>
                <td>{{ $estudiante->id }}</td>
                <td>{{ $estudiante->Nombres }}</td>
                <td>{{ $estudiante->codigou }}</td>
                <td>{{ $estudiante->telefono }}</td>
                <td>{{ $estudiante->fechadenacimiento }}</td>
                <td>{{ $estudiante->escuela }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

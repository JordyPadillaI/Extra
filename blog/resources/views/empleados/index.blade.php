Inicio (Despliegue de datos)

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Domicilio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->Apellido_Paterno}}</td>
            <td>{{$empleado->Apellido_Materno}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>{{$empleado->Domicilio}}</td>
            <td>Editar | Borrar</td>
        </tr>
        @endforeach
    </tbody>
</table>
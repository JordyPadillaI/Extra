Seccion para editar empleados

<!doctype html>
<html>
@extends('layouts.app')

@section('content')
<div class="container">
<head>
<title>Registro</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--css-->
</head>
<body>
<div class="container-fluid" >
<div class="col-sm" >
<div class="card">
  <div class="card-header">
    REGISTRO
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    <form action="{{url('/empleados/'.$empleado->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="Nombre">Nombre(s)</label>
      <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ $empleado->Nombre }}">
    </div>
</div> 
    
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="Apellido Paterno">Apellido Paterno</label>
      <input type="text" class="form-control" name="Apellido Paterno" id="Apellido Paterno" value="{{ $empleado->Apellido_Paterno }}">
</div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="Apellido Materno">Apellido Materno</label>
      <input type="text" class="form-control" name="Apellido Materno" id="Apellido Materno" value="{{ $empleado->Apellido_Materno }}">
    </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="Correo">Correo Electrónico</label>
      <input type="email" class="form-control" name="Correo" id="Correo" value="{{ $empleado->Correo }}" value="{{ $empleado->Correo }}">
    </div>
</div>
    <div class="form-row">
    <div class="form-group col-md-3">
    <label for="Domicilio">Domicilio</label>
    <input type="text" class="form-control" name="Domicilio" id="Domicilio" placeholder="Ingrese calle y número..." value="{{ $empleado->Domicilio }}">
  </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="Municipio">Municipio</label>
      <input type="text" class="form-control" name="Municipio" id="Municipio" value="{{ $empleado->Municipio }}">
    </div>
</div>
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="Estado">Estado</label>
      <input type="text" class="form-control" name="Estado" id="Estado" value="{{ $empleado->Estado }}">
    </div>
    <!--
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>-->

    </div>
    <button type="submit" class="btn btn-primary">Editar</button>
</form>
      
    </blockquote>
  </div>
</div>
</div>
</div>
</div>
@endsection
</body>
</html>
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

@if(count($errors)>0)
<div class="alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
<div class="container-fluid" >
<div class="col-sm" >
<div class="card">
  <div class="card-header">
    REGISTRO
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    <form action="{{url('/empleados')}}" method="POST">
    {{ csrf_field() }}
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="Nombre">Nombre(s)</label>
      <input type="text" class="form-control" name="Nombre" id="Nombre">
    </div>
</div> 
    
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="Apellido Paterno">Apellido Paterno</label>
      <input type="text" class="form-control" name="Apellido Paterno" id="Apellido Paterno">
</div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="Apellido Materno">Apellido Materno</label>
      <input type="text" class="form-control" name="Apellido Materno" id="Apellido Materno">
    </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="Correo">Correo Electrónico</label>
      <input type="email" class="form-control" name="Correo" id="Correo">
    </div>
</div>
    <div class="form-row">
    <div class="form-group col-md-3">
    <label for="Domicilio">Domicilio</label>
    <input type="text" class="form-control" name="Domicilio" id="Domicilio" placeholder="Ingrese calle y número...">
  </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="Municipio">Municipio</label>
      <input type="text" class="form-control" name="Municipio" id="Municipio">
    </div>
</div>
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="Estado">Estado</label>
      <input type="text" class="form-control" name="Estado" id="Estado">
    </div>
    <!--
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>-->

    </div>
    <button type="submit" class="btn btn-primary">Registrase</button>
</form>
      
    </blockquote>
  </div>
</div>
</div>
</div>
</body>
</div>
@endsection
</html>

<!--
Seccion para crear empleados
<form action="{{url('/empleados')}}" method="post">

    {{ csrf_field() }}
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id = "Nombre" value="">
    <input type="submit" value="Agregar">

</form>-->
<!doctype html>
<html>
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
    <form action="{{url('/empleados')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="Nombre">Nombre(s)</label>
      <input type="text" class="form-control" id="Nombre">
    </div>
</div> 
    
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputAP">Apellido Paterno</label>
      <input type="text" class="form-control" id="inputAP">
</div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputAM">Apellido Materno</label>
      <input type="text" class="form-control" id="inputAM">
    </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Correo Electrónico</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
</div>
    <div class="form-row">
    <div class="form-group col-md-3">
    <label for="inputAddress">Domicilio</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Ingrese calle y número...">
  </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
</div>
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputState">Estado</label>
      <input type="text" class="form-control" id="inputState">
    </div>
    <!--<div class="form-group col-md-6">
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
</html>

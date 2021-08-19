<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ABS INGENIEROS</title>

<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

</head>
<body style="background-image: url('../img/fondo.jpg');">

<body>
    <div class="contenedor">
        <center><h2 style="color:white">BIENVENIDO A LA PLATAFORMA DE ABS INGENIEROS</h2></center>
        <br>
        <br>
        <center>
        <!--
        <form class="form-inline">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Número de Documento de identidad:</label>
    <input type="text" name="buscar" placeholder="ingresar número" class="input__text" >

    <button type="submit" class="btn btn-primary">ingresar</button>
    <a href="<?php //echo base_url()?>/public/controllerMenu" class="btn btn-primary" name="btn_buscar" value="">Ingresar</a>
  </div>	 
</form></center>-->


    <form action="<?php echo base_url()?>/public/Home/login_action" method="post">

        <!--<div class="form-group">
            <label>Nº documento de identidad</label>
            <input type="text" name="dni_cliente" class="form-control" required>
    </div>-->

    <div class="form-group">
    <label for="texto" style="color:white">Ingrese Nº documento de identidad</label>
    <input type="text" name="dni_cliente" style="width : 150px; heigth : 150px" class="form-control" placeholder="Ingrese número" autocomplete="off" required>

    <!-- autocomplete="off" =>este código sirve para que aparezca el historial o el autocomplete cuando se ingresan varios datos en el campo-->
    
  </div>
    
    <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
</div>
</center>
    

</body>
</html>
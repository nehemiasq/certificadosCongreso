<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ABS INGENIEROS</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

</head>
<body>
    <div class="contenedor">
        <center><h2>DOCUMENTOS CONGRESO Y/O TUTORIAL</h2></center>

        <center><h4>Hacer clic en el botón según la acción a realizar</h4></center>

        <br>
        <br>
        <center>
        <form class="form-row">
  <div class="form-group">
    <!--<label for="inputPassword2" class="sr-only">Material congreso</labe>
    <button type="submit" class="btn btn-primary" value="vistaMaterial">Descargar</button>-->

    <?php if ($MaterialCongreso != ""): ?>   

        <!--Este código funciona cuando se sube un archivo al servidor, en este caso la carpeta uploads creada-->
        <a href="<?php echo base_url('uploads/Material_Tutorial_Dired_Cad_2022.zip')?>" class="btn btn-primary" name="btn_buscar" value="MaterialCongreso" download>Descargar Material congreso</a>     
</div>
        <!--Estos 2 enlaces funcionan de igual manera para descargar pero de manera local-->
        <!--<a href="<?= $MaterialCongreso; ?>" class="btn btn-primary" name="btn_buscar" value="MaterialCongreso" download>Descargar Material congreso</a>-->      

        <!--<a href="http://www.absingenieros.com/Material-Tutorial-DiredCad-2022.rar" class="btn btn-primary" name="btn_buscar" value="" target="_blank" download>Descargar Certificado congreso</a>-->


<div class="form-group">
<?php endif; ?>   

<?php if ($CertCongreso != ""): ?>

        <a href="<?= $CertCongreso; ?>" class="btn btn-primary" name="btn_buscar" value="" target="_blank" download>Descargar Certificado congreso</a>
        
<?php endif; ?>  

</div>

<div class="form-group"> 

<?php if ($CertTutorial != ""): ?>

        <a href="<?= $CertTutorial; ?>" class="btn btn-primary" name="btn_buscar" value="" target="_blank" download>Descargar Certificado tutorial</a>

<?php endif; ?>   

</div>

<div class="form-group">

        <a href="<?php echo base_url()?>/public/Home" class="btn btn-danger" name="btn_buscar" value="">Salir de la plataforma</a>

      </div>

        <div class="form-group">

        <a href="https://absingenieros.com/licencias-temporales/" class="btn btn-info" name="btn_buscar" value="">Ir a la web ABS INGENIERIOS</a>

  </div>
	<br>
  <br>

</form></center>

    </div>
</body>
</html>


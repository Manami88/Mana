<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if (!$_SESSION['persona'])
{
  $_SESSION['persona']=[];
  setcookie("saludo","tu session a iniciado");
}
$nombre="";
$apellido="";
$fechaN="";

 if ($_POST)
{
   array_push($_SESSION['persona'],
   [
     "nombre"=> $_POST['nombre'],
     "apellido"=> $_POST['apellido'],
     "fechaN"=> $_POST['fechaN']
    ] );
   $nombre=$_POST['nombre'];
   $apellido=$_POST['apellido'];
   $fechaN=$_POST['fechaN'];
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tarea Karina</title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <script src="lib/jquery/jquery.min.js" charset="utf-8"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  <body>
    <h1><font face="Algerian"color="blue" size="7">Formularios con PHP</font></h1>
    <div id="formulario">
      <form class="" action="tarea kari.php" method="post">
        <p>
          <label for="apellido"><font face="Arial"color="black"size="5">Apellido</font</label> <br>
          <input type="text" name="apellido" class="form-control" value=""placeholder="Apellido">
        </p>
        <p>
          <label for="nombre"><font face="Arial"color="black"size="5">Nombre</font></label><br>
          <input type="text" name="nombre" value=""  class="form-control"placeholder="Nombre" >
        </p>
        <p>
          <label for="nombre"><font face="Arial"color="black"size="5">Fecha de Nacimiento<font</label><br>
          <input type="date" name="fechaN" value="" class="form-control" placeholder="FechaN"><br>
        </p>
        <button type="submit" name="button" class="btn btn-success">Enviar</button> <a href="Cerrar.php" class="btn btn-danger">Cerrar Sesión</a>
      </form>

<?php
$persona=$_SESSION['persona'];
?>
    </div>
    <table border="1">
  <thead>
    <tr>
    <th>Apellido</th>
    <th>Nombre</th>
    <th>Fecha</th>
</tr>
  </thead>
  <tbody id="datos">
    <?php
    foreach ($persona as $key => $value) {
      echo "<tr><td>".$value['apellido']."</td><td>".$value['nombre']."</td><td>".$value['fechaN']."</td></tr>";
    }
    ?>
  </tbody>
</table>
  </body>
</html>

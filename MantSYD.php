 <?php 

  include 'BaseDeDatos.php';

$txtID=(isset($_POST['IDAD']))?$_POST['IDAD']:"";
$txtFoto=(isset($_FILES['Foto']['name']))?$_FILES['Foto']["name"]:"";
$txtNombre=(isset($_POST['Nombre']))?$_POST['Nombre']:"";
$txtDescripcion=(isset($_POST['Descripcion']))?$_POST['Descripcion']:"";
$txtPrecio=(isset($_POST['Precio']))?$_POST['Precio']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

 switch ($accion) {

   case "btnAgregar":

   $fecha = new DateTime();
   $nombreArchivo=($txtFoto!="")?$fecha->getTimestamp()."_".$_FILES["Foto"]["name"]:"images.jpg";
   $tmpFoto= $_FILES["Foto"]["tmp_name"];
 
   if ($tmpFoto!="") {
     move_uploaded_file($tmpFoto, "../img/".$nombreArchivo);
   }


$query =mysqli_query($conection,"INSERT INTO `SYD` (`Foto`, `Nombre`, `Descripcion`, `Precio`)
                                       VALUES('$nombreArchivo','$txtNombre', '$txtDescripcion', '$txtPrecio')");


     echo '<script language="javascript">alert("Agregado Nuevo Administrador");</script>';
   header('location: MantSYD.php');
    break;
     case "btnModificar":

      $fecha = new DateTime();
   $nombreArchivo=($txtFoto!="")?$fecha->getTimestamp()."_".$_FILES["Foto"]["name"]:"images.jpg";
   $tmpFoto=$_FILES["Foto"]["tmp_name"];
   $local_img="../img/";

   if ($tmpFoto!="") {
     move_uploaded_file($tmpFoto, $local_img.$nombreArchivo);
   }

 $query =mysqli_query($conection," UPDATE `SYD` SET `Foto` = '$nombreArchivo', `Nombre` = '$txtNombre', `Descripcion` = '$txtDescripcion', `Precio` = '$txtPrecio' WHERE `SYD`.`ID_SYD` = '$txtID'");
 echo '<script language="javascript">alert("SYD Modificado Correctamente");</script>';
header('location: MantSYD.php');

    break;
     case "btnEliminar":

$query =mysqli_query($conection,"DELETE FROM `SYD` WHERE `SYD`.`ID_SYD` = $txtID");
   echo '<script language="javascript">alert("Agregada Nueva SYD");</script>';
  header('location: MantSYD.php');

    break;
     case "btnRegresar":
    header('location: Administradores.php');
    break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Mantenimiento SYD</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">




  <!-- Bootstrap CSS File -->
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">



  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">


</head>


<body>
<div class="container">
  <br>
  <h1>Mantenimiento para Suspensiones y Direcciones</h1>
  <br>
  <form action="" method="post" enctype="multipart/form-data">

   <label for="name">ID SYD</label>
   <input type="text"  name="IDAD" readonly="readonly"  value="<?php echo $txtID;?>" class="form-control"  />
       
   <label for="name">Foto</label><br>
   <input type="File" accept="image/*" name="Foto" value="<?php echo $txtFoto;?>" /><br>

    <label for="name">Nombre</label>
   <input type="text" name="Nombre" value="<?php echo $txtNombre;?>" class="form-control"/>

   <label for="name">Descripcion</label>
   <input type="text" name="Descripcion" value="<?php echo $txtDescripcion;?>" class="form-control"/>

    <label for="name">Precio</label>
   <input type="text" name="Precio" value="<?php echo $txtPrecio;?>" class="form-control"/>
<br>
<button value="btnAgregar" type="submit" name="accion" >Agregar</button>
<button value="btnModificar" type="submit" name="accion">Modificar</button>
<button value="btnEliminar" type="submit" name="accion">Eliminar</button>
<button value="btnRegresar" type="submit" name="accion">Regresar</button>

  </form>

<br>
<div class="row">  
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
         <th>Foto</th>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Precio</th>
      </tr>
    </thead>



<?php

 $query=mysqli_query($conection,"SELECT*FROM SYD");
$lista=mysqli_fetch_all($query,MYSQLI_ASSOC);

 foreach ($lista as $items) { ?>
  <tr>
    <td><?php echo $items['ID_SYD'] ?></td>
    <td><img class="img-thumbnail" width="100px" src="../img/<?php echo $items['Foto'];?>"/></td>
    <td><?php echo $items['Nombre'] ?></td>
    <td><?php echo $items['Descripcion'] ?></td>
    <td><?php echo $items['Precio'] ?></td>
    <td>
<form action="" method="post">
<input type="hidden" name="IDAD"  value="<?php echo $items['ID_SYD']; ?>">
<input type="hidden" name="Foto" value="<?php echo $items['Foto']; ?>">
<input type="hidden" name="Nombre" value="<?php echo $items['Nombre']; ?>">
<input type="hidden" name="Descripcion" value="<?php echo $items['Descripcion']; ?>">
<input type="hidden" name="Precio" value="<?php echo $items['Precio']; ?>">

      <input type="submit" value="seleccionar" name="accion">
      <button value="btnEliminar" type="submit" name="accion">Eliminar</button>

    </form>


    </td>

  </tr>

<?php } ?>
</table>
</div>

</div>




  <!-- Vendor JS Files -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>



</body>

</html>
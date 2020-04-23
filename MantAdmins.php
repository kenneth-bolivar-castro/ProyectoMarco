
  <?php 

  include 'BaseDeDatos.php';

$txtID=(isset($_POST['IDAD']))?$_POST['IDAD']:"";
$txtAlias=(isset($_POST['alias']))?$_POST['alias']:"";
$txtCodigo=(isset($_POST['codigo']))?$_POST['codigo']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
 switch ($accion) {

    case "btnAgregar":

$query =mysqli_query($conection,"INSERT INTO `Administrador` (`Alias`, `Codigo`)
                           VALUES ('$txtAlias', '$txtCodigo')");
     echo '<script language="javascript">alert("Agregado Nuevo Administrador");</script>';
   header('location: MantAdmins.php');
    break;
     case "btnModificar":

 $query =mysqli_query($conection," UPDATE `Administrador` SET `Alias` = '$txtAlias', `Codigo` = '$txtCodigo' WHERE `Administrador`.`ID_Admin` = '$txtID'");
 echo '<script language="javascript">alert("Administrador Modificado Correctamente");</script>';
header('location: MantAdmins.php');

    break;
     case "btnEliminar":

$query =mysqli_query($conection,"DELETE FROM `Administrador` WHERE `Administrador`.`ID_Admin` = $txtID");
   echo '<script language="javascript">alert("Agregado Nuevo Administrador");</script>';
  header('location: MantAdmins.php');

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
  <title>Mantenimiento Admins</title>
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
  <h1>Mantenimiento para Administradores</h1>
  <br>
  <form action="" method="post" enctype="multipart/form-data">

   <label for="name">ID ADMIN</label>
   <input type="text"  name="IDAD" readonly="readonly"  value="<?php echo $txtID;?>" class="form-control"  />
       
   <label for="name">Alias</label>
   <input type="text" name="alias" value="<?php echo $txtAlias;?>" class="form-control"/>

    <label for="name">Codigo</label>
   <input type="text" name="codigo" value="<?php echo $txtCodigo;?>" class="form-control"/>

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
         <th>Alias</th>
          <th>Codigo</th>
          <th>Acciones</th>
      </tr>
    </thead>



<?php

 $query=mysqli_query($conection,"SELECT*FROM Administrador");
$listaAdmin=mysqli_fetch_all($query,MYSQLI_ASSOC);

 foreach ($listaAdmin as $admins) { ?>
  <tr>
    <td><?php echo $admins['ID_Admin'] ?></td>
    <td><?php echo $admins['Alias'] ?></td>
    <td><?php echo $admins['Codigo'] ?></td>
    <td>
<form action="" method="post">
<input type="hidden" name="IDAD"  value="<?php echo $admins['ID_Admin']; ?>">
<input type="hidden" name="alias" value="<?php echo $admins['Alias']; ?>">
<input type="hidden" name="codigo" value="<?php echo $admins['Codigo']; ?>">

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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Works - MyPortfolio</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Raleway:400,700&display=swap"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: MyPortfolio
    Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com/
  ======================================================= -->
</head>

<body>


<div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="about.php">Acerca de Nosotros</a></li>
            <li><a href="services.php">Servicios</a></li>
            <li><a href="works.php">Trabajos</a></li>
            <li><a href="registrarse.php">Portal Administradores</a></li>
          </ul>
        </div>
        <div class="col-md-6 d-none d-md-block  mr-auto">
          <div class="tweet d-flex">
            <span class="icofont-twitter text-white mt-2 mr-3"></span>
            <div>
              <p><em>Para ver mas de nuestros trabajos y inventario puede seguirnos por twitter </em></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-none d-md-block">
          <h3>Contratenos</h3>
          <p>Tenemos la modalidad de ayudarle en cualquier momento con mecanicos de alta calidad para reparar su vehiculo solo conectenos por via telefono y le atenderemos para enviarle un mecanico donde sea que este <br> <a href="#">62307447</a></p>
        </div>
      </div>

    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar" style="background-color:	#C0C0C0;">
    <div class="container" >
    <img class="img-fluid" src="img/logonos.jpg">
      <a class="navbar-brand" href="index.php">Repuestos Vehiculares NOS</a>

      <a href="#" class="burger" data-toggle="collapse" data-target="#main-navbar">
        <span></span>
      </a>


  </main>
</nav>

<?php

  include 'BaseDeDatos.php';

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


  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery-migrate.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/easing/easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>

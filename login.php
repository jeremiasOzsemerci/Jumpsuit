<?php
include('BD/connection.php');


$con = connection();

$sql = "SELECT * FROM usuario";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    《Jumpsuit》- Usuario</title>
  </title>
  <link rel="icon" href="IMG/logo.png">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="stilo.css">
</head>

<body>
  <header>
    <div id="header" style=" z-index:99;">
      <a href="index.html"><img src="IMG/logo.png" width="80px"></a>
      <ul class="nav" style="position: fixed; left:29%; top: 30px;">
        <li><a href="index.html">
            <font face="verdana" size="4">Inicio
          </a></font>
        </li>
        <li><a href="nosotros.html">
            <font face="verdana" size="4">Nosotros
          </a></font>
        </li>
        <li><a href="contactanos.html">
            <font face="verdana" size="4">Contactanos
          </a></font>
        </li>
        <li><a href="generos.html">
            <font face="verdana" size="4">Generos
          </a></font>
        </li>
        <li><a href="usuario.html">
            <font face="verdana" size="4" style="color: yellow;">Usuario</font>
          </a></li>
      </ul>
    </div>
  </header>

  <div class="banners">
    <h1 data-aos="fade-up" data-aos-duration="2000">USUSARIO</h1>
  </div>




  <section class="usuario">
    <h1 class="usuariotxt"> Ingresa con tu cuenta o crea una nueva</h1>

    <div class="formulario">
      <form action="BD/insertuser.php" method="POST">
        <section class="form-register">
          <h4>Cuenta de Usuario</h4>
          <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
          <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido">
          <input class="controls" type="email" name="email" id="email" placeholder="Ingrese su Correo">
          <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su Contraseña">
          <p>
            <font color="gray"> Estoy de acuerdo con <a href="#">
                <font color="gray">Terminos y Condiciones
              </a>
          </p>
          <input class="botons" type="submit" value="REGISTRARSE">
          <p><a href="#">
              <font color="gray">¿Ya tienes una cuenta?
            </a>
          </p>
        </section>
      </form>
    </div>

  </section>




  <section>
    <div class="piedepagina">
      <hr color="red">
      <img src="IMG/logo.png" class="piedepaginapcis" width="70">
      <h5> · · · Todos los derechos reservados© · · · Jumpsuit 2023 · · · Condiciones Comerciales Generales · · ·
      </h5>
      <div class="piedepaginapcis">
        <img src="IMG/logitech logo.png" class="piedepaginapcis" width="30" height="30">
        <img src="IMG/steamlogo.png" class="piedepaginapcis" width="30" height="30">
        <img src="IMG/epic games.png" class="piedepaginapcis" width="70" height="40">
        <img src="IMG/ubisoftlogo.png" class="piedepaginapcis" width="50" height="40">
        <img src="IMG/hyperxlogo.png" class="piedepaginapcis" width="70" height="40">
        <img src="IMG/razerlogo.png" class="piedepaginapcis" width="100" height="30">
        <img src="IMG/aoruslogo.png" class="piedepaginapcis" width="40" height="40">
        <img src="IMG/amdlogo.png" class="piedepaginapcis" width="100" height="30">
      </div>
  </section>




  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
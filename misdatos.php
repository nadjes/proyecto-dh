<?php
session_start()
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/misdatos.css">
    <title></title>
  </head>
  <body>
    <?php include('header.php') ?>

    <br><br><br><br>

    <section>
      <h2>Mis datos</h2><br><br>
<?php  ?>
      <form class="" action="misdatos.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" value="<?php echo isset($_SESSION['nombre']) ? $_SESSION['nombre'] : "" ?>"><br>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" value="<?php echo isset($_SESSION['apellido']) ? $_SESSION['apellido'] : "" ?>"><br>
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" value="<?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : "" ?>"><br>
        <label for="email">Email: </label>
        <input type="text" name="" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : "" ?>"><br>
        <label for="">Contraseña:</label> <a href="#">Modificar contraseña</a><br><br>
        <input id="boton" type="submit" name="" value="Guardar cambios">

      </form>
    </section>

    </div>


    <?php include('footer.php') ?>
  </body>
</html>

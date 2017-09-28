<header>
  <div class="izquierda">
    <div class="img-logo">
      <a href="index.php"><img src="images/hs-logo.png" alt=""></a>
    </div>

    <form class="buscador" action="index.html" method="post">
      <input type="text" name="" value="" placeholder="Estoy buscando...">
      <button type="submit" name="button">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </form>

  </div>
  <div class="derecha">
    <input type="checkbox" id="menu">
    <label for="menu" class="menu">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </label>

    <nav>
      <ul>
        <li class="movil">
          <form class="buscador-movil" action="index.html" method="post">
           <input type="text" name="" value="" placeholder="Estoy buscando...">
           <button type="submit" name="button">
              <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
           </button>
          </form>
        </li>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="faqs.php">FAQ</a>
        </li>
        <li>
          <a href="registro.php"><?php echo isset($_SESSION['nombre']) ? "" : 'Registrarse' ?></a>
        </li>
        <li>
          <a href="ingresar.php" id="hover"><?php echo isset($_SESSION["usuario"]) ? strtoupper($_SESSION["usuario"]) : 'Ingresar' ?></a>
          <div class="ingreso">
            <?php if (isset($_SESSION['nombre'])){
              echo '<div class="opciones">
                <a>Mis datos</a>
                <a>Compras</a>
                <a>Favoritos</a>
                <a>Cerrar sesión</a>
              </div>';
              } else {
              echo '<form class="" action="ingresar.php" method="post">
                 <div class="ingreso-arriba-arriba">
                   <label for="usuario">Usuario</label>
                   <input type="email" name="email" value="" id="usuario" placeholder="E-mail">
                   <label for="pass">Contraseña</label>
                   <input type="password" name="password" value="" id="pass" placeholder="Contraseña">
                 </div>
              <div class="ingreso-arriba">
                  <input type="checkbox" name="recordarme" value="" id="recordarme">
                  <label for="recordarme">Recordame</label>
              </div>
              <div class="ingreso-abajo">
                  <input type="submit" name="btn-session" value="Iniciar sesión">
                   <a href="#">Olvide mi contraseña</a>
              </div>
            </form>';
            } ?>

         </div>
        </li>

      </ul>
    </nav>
  </div>
  </header>

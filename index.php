<?php
session_start() ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>DH - Proyecto</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/header.css">
      <link rel="stylesheet" href="css/fonts.css">
      <link rel="stylesheet" href="css/footer.css">
      <link href="https://fonts.googleapis.com/css?family=EB+Garamond|News+Cycle" rel="stylesheet">
      <link rel="stylesheet" href="css/index.css">
      <title>Sale de invierno</title>
      <script src="https://use.fontawesome.com/bb1fbcebba.js"></script>

   </head>
   <body>
     <!--................... Header............................ -->

    <?php include('header.php') ?>

       <!-- ................fin Header.................. -->
    <!-- NOTE: cuerpo -->
      <div class="container">
        <div class="banner">
          <video autoplay loop muted preload="auto">
            <source src="videos/secuencia.mp4" type="video/mp4">
          </video>
          <p>Liquidación de INVIERNO</p>
        </div>
        <div class="banner-cel">
          <img src="images/nieve.png" alt="">
          <p>Liquidación de INVIERNO</p>
        </div>
        <?php var_dump($_SESSION) ?>

           </div>
            <div class="secciones">
              <section class="categorias">
                <h2>CATEGORIAS</h2>
                <ul>
                  <li>Hombre</li>
                  <li>Mujer</li>
                </ul>
                <h2>TEMPORADAS</h2>
                <ul>
                  <li>OTOÑO - INVIERNO</li>
                  <li>PRIMAVERA - VERANO</li>
                </ul>


              </section>

              <section class="ofertas">
                <h2>PRODUCTOS EN OFERTA</h2>
                <div class="prod-oferta">
                  <img src="images/foto1.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
                  <button type="button" name="button">COMPRAR</button>
                </div>
                <div class="prod-oferta">
                  <img src="images/foto2.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
                  <button type="button" name="button">COMPRAR</button>
                </div>
                <div class="prod-oferta">
                  <img src="images/foto3.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
                  <button type="button" name="button">COMPRAR</button>
                </div>
                <div class="prod-oferta">
                  <img src="images/foto4.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
                  <button type="button" name="button">COMPRAR</button>
                </div>
                <div class="prod-oferta">
                  <img src="images/foto5.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
                  <button type="button" name="button">COMPRAR</button>
                </div>
                <div class="prod-oferta">
                  <img src="images/foto1.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
                  <button type="button" name="button">COMPRAR</button>
                </div>

              </section>
              <!--<section class="medios-pagos">
                 <div class="img-pagos">
                    <img src="images/mercadopago.png" alt="Mercado Pago" id="mercadopago">
                    <img src="images/paypal.png" alt="Paypal">
                    <img src="images/mastercard.png" alt="Mastercard">
                    <img src="images/visa.png" alt="Visa">
                 </div>
              </section> -->

           </div>
                                    <!-- NOTE: FOOTER  -->

         <?php include('footer.php') ?>

      </div><!-- NOTE: end container -->

   </body>
</html>

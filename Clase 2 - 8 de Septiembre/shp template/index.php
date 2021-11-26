<?php
$productos = [
  ['nombre' => 'Papas Fritas', 'precio' => 100, 'imagen'=> 'img/papas-fritas.png'], 
  ['nombre' => 'Ensalada', 'precio' => 300, 'imagen'=> 'img/ensalada.png'], 
  ['nombre' => 'Pizza', 'precio' => 500, 'imagen'=> 'img/pizza.png'], 
  ['nombre' => 'Sandwich', 'precio' => 300, 'imagen'=> 'img/sandwich.png'], 
  ['nombre' => 'Hamburguesa', 'precio' => 350, 'imagen'=> 'img/hamburguesa.png'], 
  ['nombre' => 'Galletitas', 'precio' => 200, 'imagen'=> 'img/galletitas.png'], 
  ['nombre' => 'Pancho', 'precio' => 200, 'imagen'=> 'img/pancho.png'], 
  ['nombre' => 'Dona', 'precio' => 100, 'imagen'=> 'img/dona.png'], 
  
  ]
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('head.php'); ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include('nav.php'); ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-6 mx-auto">
                <div class="text-left">
                    <h1 class="my-0">Comprá online desde tu casa.</h1>
                    <h2 class="mt-3 mb-5">¡Nosotros te lo llevamos!</h2>
                </div>
              </div>
              <div class="col-6">
                <img src="img/hero.png"/>
              </div>

            </div>
        </header>
        <!-- Productos-->
        <?php include('productos.php'); ?>
        <!-- Contacto-->
       <?php include('contacto.php'); ?>

            </div>
          <footer class="footer small text-center"><div class="container">Plantilla web didáctica - Potrero Digital 2021</div></footer>
        </section>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

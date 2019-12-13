<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>

  <?php  
  function acortar_texto($texto) {
    //Maximo de caracteres
    $maximo = 120;
    //Se saca el total de caracteres
    $longitud = strlen($texto);
    //Comprobamos si supera el maximo de caracteres
    if ($longitud > $maximo) {
        //Si es asi lo acortamos
        return substr($texto, 0, $maximo) . "...";
    } else {
        //Si no lo supera lo dejamos como estaba
        return $texto;
    }
  }
  ?>
</head>

<body <?php body_class(); ?>>

  <!--
      ---------------------------------------------------------------------------------------------------------------------
      ----------------------------------------------------HEADER-----------------------------------------------------------
      ---------------------------------------------------------------------------------------------------------------------
  -->
  <header>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <img src="<?php echo site_url().'/wp-content/uploads/2019/10/logo_home.jpg'; ?>" />
          </div>
          <!--Menu Principal-->
          <div class="col-sm-9">
            <!--Menu superior-->
            <div class="d-flex justify-content-between bd-highlight mb-3">
              
                <nav class="menu-top">
                  <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-home"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-envelope"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                    </li>
                  </ul>
                </nav>      
              
                <nav class="menu-top">
                  <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-store"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-key"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                  </ul>
                </nav>
            </div>
            <!--#Menu superior-->

            <!--Menu inferior-->
            <div class="d-flex justify-content-end">
              <nav class="menu-bottom">
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">DECO</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">A MANO</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">RECETAS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">TIEMPO LIBRE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">DATOS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">TIENDA</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

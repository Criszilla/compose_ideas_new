<?php
    get_template_part('includes/header'); 
    b4st_main_before();
?>

 <main>
  <div class="container-fluid">
    <!--
      -------------------------------------------------------------------------------------------------------------------
      ---------------------------------------------SLIDER HOME-----------------------------------------------------------
      -------------------------------------------------------------------------------------------------------------------
    -->
    <section class="container">
      <div class="row">
        <div class="col">                
          <div id="slider_home" class="owl-carousel  owl-theme">
            <?php 
              $conteofotos = 0; 
              while ( have_rows('slider_home') ) : the_row();
                $imagen_slide_home = get_sub_field('imagen_slide_home');
                $titulo_slide_home = get_sub_field('titulo_slide_home');
                $subtitulo_slide_home = get_sub_field('subtitulo_slide_home');
                $link_slide_home = get_sub_field('link_slide_home');
                $conteofotos++;
            ?>
              <div class="item">
                <a href="<?php echo $link_slide_home; ?>">
                  <img src="<?php echo $imagen_slide_home['url']; ?>" alt="<?php echo $titulo_slide_home; ?>" />
                </a>
                <?php if($titulo_slide_home !=""){?>
                  <div class="item-caption">
                    <h2><?php echo $titulo_slide_home; ?></h2>
                    <?php if($subtitulo_slide_home !=""){echo '<h4>'.$subtitulo_slide_home.'</h4>';}?>
                  </div>
                <?php } ?>
              </div>
            <?php endwhile;?>
          </div>
        </div>
      </div>
    </section>

    <!--
      -------------------------------------------------------------------------------------------------------------------
      ---------------------------------------------LOS MÁS RECIENTES-----------------------------------------------------
      -------------------------------------------------------------------------------------------------------------------
    -->

    <section class="container">
      <div class="row">
        <div class="col">                
          <h2 class="titulo-seccion">Los más recientes</h2>
        </div>
      </div>
      <?php 
        $novedades = new WP_Query(array(
          'post_type'     => array('post'),
          'posts_per_page'  => 3,
          'post_status'   => 'publish',
          'orderby'       => 'menu_order date',
          'order'         => 'DESC',
        ));
      ?>
      <div class="row">
        <?php            
          if ($novedades->have_posts() ) : 
            while ( $novedades->have_posts() ) : $novedades->the_post();
            $titulo_post =  get_the_title();
            $contenido_post = get_the_content();
            ?>
              <div class="col col-12 col-md-4 ml-auto mr-auto">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-100', 'alt' => $titulo_post]); ?>                  
                </a>
                <h2><?php echo $titulo_post; ?></h2>
                <div class="resumen-post">
                  <?php echo acortar_texto($contenido_post); ?> <a href="<?php the_permalink(); ?>" target="_self">leer más</a>
                  <hr>
                  <?php the_date();?>
                </div>
              </div>
            <?php endwhile;?>
            <?php wp_reset_postdata(); ?>                      
          <?php else: ?>
            <h2 class="text-center">No se han encontrado resultados</h2>
          <?php endif; ?>
      </div>
    </section>

    <!--
      -------------------------------------------------------------------------------------------------------------------
      ---------------------------------------------PRODUCTOS DESTACADOS--------------------------------------------------
      -------------------------------------------------------------------------------------------------------------------
    -->

    <section class="container">
      <div class="row">
        <div class="col">                
          <h2 class="titulo-seccion">Productos Destacados</h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
        </div>
      </div>
    </section>


</main>

<?php 
    b4st_main_after();
    get_template_part('includes/footer'); 
?>

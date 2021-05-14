<?php ?> 
<!DOCTYPE html>
<html lang="es">
 
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
</head>
 
<body class="w-100">
 
<?php wp_head()?> 
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg  bg-gray  fixed-top navbar-dark">
    <div class="container">
     <?php the_custom_logo() ?> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php 
          $menuraiola = array(
            'menu'            => 'menu-principal',
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarResponsive',
            'menu_class'      => 'navbar-nav ml-auto',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'item_spacing'    => 'preserve',
            'depth'           => 0,
            'walker'          => '',
            'theme_location'  => '',
        );
        wp_nav_menu($menuraiola);

       ?> 
    </div>
  </nav>
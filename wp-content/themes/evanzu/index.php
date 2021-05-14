<?php get_header(); ?>
  
<div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- SE MUESTRA EL CONTENIDO DEL POST -->
 
               
            <div class="card mb-4">

            <?php the_post_thumbnail(); ?>
         <div class="card-body">
           <h2 class="card-title"><?php the_title(); ?></h2>
           <p class="card-text"><?php the_excerpt(); ?></p>
           <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer más &rarr;</a>
         </div>
         <div class="card-footer text-muted">
           <?php echo get_the_date(); ?> - <?php the_author(); ?>
           
         </div>


            </div>
            
            <!--
                AQUI VA EL HTML Y PHP DE LOS POSTS DEL HOME
             -->
       
        <?php endwhile; else : ?>
            <!-- SI NO SE CONSIGUE NINGÚN POST, SE RETORNA UN MENSAJE: -->
            <p>Lo siento, no hemos encontrado ningún post.</p>
 
        <?php endif; ?>
           <!-- SE DETIENE EL LOOP -->

        <?php get_footer(); ?>
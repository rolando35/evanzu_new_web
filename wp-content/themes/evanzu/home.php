<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
 <!--////First////-->
<section>
   <video autoplay muted loop id="myVideo">
       <source src="<?php echo get_template_directory_uri()?>/evanzu.mp4" type="video/mp4">
    </video>
</section>   
  <!--////Second////-->   
<section>
      <div class="bg-red">
        <div class="container row">

            <div class="col-md-6">
                <div>
                    <div class="text-white">Agencia de</div>
                    <div class="text-yellow">MARKETING</div>
                    <div class="text-white">Y PUBLICIDAD</div>
                    <div> <span class="text-white">GRANDES IDEAS</span>  <span class="text-yellow">PARA GRANDES RESULTADOS</span> </div>
                    <div class="text-white">
                    en marketing digital, branding & diseño, producción audiovisual, BTL & comunicación y desarrollo de software.
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                    imagen
            </div>
            
        </div>
    </div>

    <div class="d-flex justify-content-center bg-red">
            <div  id="rectangle"> </div>
    </div> 
</section>
<section>
 <div id="box-masonry">
        <div class="text-red text-center subtitle">
            PORTAFOLIO
        </div>
      <div class>
            <img    src="<?php echo get_option("evanzu")["galleri-image-one"] ;?>">   
      </div>
       
        
  </div>

        <div class="row pt-5 bg-red">
            <div class="col-md-6">
                <div>
                    <div class="text-white">Agencia de</div>
                    <div class="text-yellow">MARKETING</div>
                    <div class="text-white">Y PUBLICIDAD</div>
                    <div> <span class="text-white">GRANDES IDEAS</span>  <span class="text-yellow">PARA GRANDES RESULTADOS</span> </div>
                    <div class="text-white">
                    en marketing digital, branding & diseño, producción audiovisual, BTL & comunicación y desarrollo de software.
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                    imagen
            </div>

        </div>

</section>

      



<?php get_footer(); ?>
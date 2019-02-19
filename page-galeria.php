<?php get_header();?>


<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center fondo"></div>
       
 <div class="col-lg-12 col-sm-12 col-md-12">
    
     
    <div class="noso text-white text-center arriba02 ">
    <!--<h1 class="intro-lead-in"><?php $title_item1 = get_post_meta ( get_the_ID ( ) , 'title_item1' , true ) ;
       echo $title_item1; ?></h1>-->
     <h1 class="intro-lead-in">Los Mejores Platos</h1>
    
    </div>
   
   </div>
   </div>
   
    
</div>
  <section id="blanco">
   <div class="row">
         
           
          <div class="col-lg-12 text-center mt-5">
            <h2 class="text-dark"><u>Vea Nuestra </u></h2>
           <h3 class="text-dark">Galeria de Imagenes</h3>
          </div><br><br><br>
          
        </div>
        <div class="row">
          
           <?php
                echo do_shortcode( '[envira-gallery id="107"]' );
            ?>
            
        </div>
        
    </section>    
<?php get_footer();?>
        
       
      
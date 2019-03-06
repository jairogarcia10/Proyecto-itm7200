<?php get_header();?>
<div class="container-fluid"> 
  <div class="row ">
 <div class="col-lg-12 col-md-12 col-sm-12  text-center imagen-nosotros1">
<!--img class="img-fluid masthead" src=" <?php bloginfo('template_directory');?>/assets/img/noso.png"-->
  </div>
  
   <div class="col-lg-12 col-sm-12 col-md-12">
     <div class="noso text-white text-center arriba ">
     <h1 class="intro-lead-in"><?php the_field( 'titulo_inicio' ); ?></h1> 
     <span class="intro-heading text-uppercase"><?php the_field( 'subtitulo_inicio' ); ?></span>
    
    </div>
     
   
   </div>
    </div>
   </div>
<section id="blanco">
    <div class="container">
       <div class="row mt-5 justify-content-center ">
            <div class="col-lg-6 col-md-11 col-sm-11 text-center ">
                <img class="img-fluid " src=" <?php bloginfo('template_directory');?>/assets/img/grupo.png">
            </div>
        </div>
        <div class="row">
         
           
          <div class="col-lg-12 text-center mt-5">
            <h2 class="text-dark"><u><?php the_field( 'titulo_nuestra_historia' ); ?></u></h2>
            <p class="text-dark"><?php the_field( 'parrafo_historia' ); ?></p>
          </div><br><br><br>
        </div>
        <div class="row">
         
           
          <div class="col-lg-12 text-center mt-5">
            <h2 class="text-dark"><u><?php the_field( 'titulo_nuestro_equipo' ); ?></u></h2>
            
          </div><br><br><br>
        </div>
   
      </div>
      <div class="container-fluid">
      <div class="row mt-5 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-11 text-center my-2">
                <div class="card">
                <?php if ( get_field( 'imagen_equipo_1') ) { ?>
	<img src="<?php the_field( 'imagen_equipo_1' ); ?>" class="img-fluid"  />
<?php } ?>
                 <!--img class="img-fluid " src=" <?php bloginfo('template_directory');?>/assets/img/team.png"-->
                 <div class="card-body">
                    <p class="card-text">Pedro</p>
                 </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-11 text-center my-2 ">
                <div class="card" >
                <?php if ( get_field( 'imagen_equipo_1') ) { ?>
	<img src="<?php the_field( 'imagen_equipo_1' ); ?>" class="img-fluid" />
<?php } ?>
                 <!--img class="img-fluid " src=" <?php bloginfo('template_directory');?>/assets/img/team.png"-->
                 <div class="card-body">
                    <p class="card-text">Pedro</p>
                 </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-11 text-center my-2  ">
                <div class="card" >
                 <?php if ( get_field( 'imagen_equipo_1') ) { ?>
	<img src="<?php the_field( 'imagen_equipo_1' ); ?>" class="img-fluid"  />
<?php } ?>
                 <div class="card-body">
                    <p class="card-text">Pedro</p>
                 </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-11 text-center my-2 ">
                <div class="card" >
                 <?php if ( get_field( 'imagen_equipo_1') ) { ?>
	<img src="<?php the_field( 'imagen_equipo_1' ); ?>" class="img-fluid"  />
<?php } ?>
                 <div class="card-body">
                    <p class="card-text">Pedro</p>
                 </div>
                </div>
            </div>
        </div>
        </div>
              <div class="container-fluid">
      <div class="row mt-5 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-11 text-center my-2">
                <div class="card">
                 <?php if ( get_field( 'imagen_equipo_1') ) { ?>
	<img src="<?php the_field( 'imagen_equipo_1' ); ?>" class="img-fluid"  />
<?php } ?>
                 <div class="card-body">
                    <p class="card-text">Pedro</p>
                 </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-11 text-center my-2 ">
                <div class="card" >
                 <?php if ( get_field( 'imagen_equipo_1') ) { ?>
	<img src="<?php the_field( 'imagen_equipo_1' ); ?>" class="img-fluid"  />
<?php } ?>
                 <div class="card-body">
                    <p class="card-text">Pedro</p>
                 </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-11 text-center my-2  ">
                <div class="card" >
                 <?php if ( get_field( 'imagen_equipo_1') ) { ?>
	<img src="<?php the_field( 'imagen_equipo_1' ); ?>" class="img-fluid"  />
<?php } ?>
                 <div class="card-body">
                    <p class="card-text">Pedro</p>
                 </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-11 text-center my-2 ">
                <div class="card" >
                <?php if ( get_field( 'imagen_equipo_1') ) { ?>
	<img src="<?php the_field( 'imagen_equipo_1' ); ?>" class="img-fluid"  />
<?php } ?>
                 <div class="card-body">
                    <p class="card-text">Pedro</p>
                 </div>
                </div>
            </div>
        </div>
        </div>
   </section>
   <?php get_footer();?>
   
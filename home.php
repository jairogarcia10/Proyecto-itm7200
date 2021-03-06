<?php get_header();?>

<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center fondo"></div>
       
 <div class="col-lg-12 col-sm-12 col-md-12">
    
     
    <div class="noso text-white text-center arriba02 ">
    <h1 class="intro-lead-in"><?php $title_item1 = get_post_meta ( get_the_ID ( ) , 'titulo' , true ) ;
       echo $title_item1; ?></h1>
     <!--<h1 class="intro-lead-in">Tu Lugar Cotidiano</h1>
     <span class="intro-heading text-uppercase">Bienvenidos a JK Restaurant</span>-->
      <span class="intro-heading text-uppercase"><?php the_field( 'subtitulo' ); ?></span>
     <!-- <div ><a class="btn boton-vermenu btn-xl text-uppercase js-scroll-trigger" href="page-contacto.php">Ver Menu</a></div>-->
      <div ><a class="btn boton-vermenu btn-xl text-uppercase js-scroll-trigger" href="./page-menus.php"><?php the_field( 'boton' ); ?></a></div>
    </div>
   
   </div>
   </div>
   
    
</div>



   


<section id='Nosotros'>
<div class="container-fluid">

<div class="row ">
 <div class="col-lg-6 col-md-12 col-sm-12  text-center background-nosotros my-auto">
  <!--img class="img-fluid" src=" <?php bloginfo('template_directory'); ?>/assets/img/historia.png"/-->
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 p-4 section-nosotros">
      <!--h1 class="h1">Nuestra historia</h1-->
       <h1 class="h1"><?php the_field( 'titulo2' ); ?></h1>
       <p><?php the_field( 'parrafo_historia' ); ?></p>
      <!--<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, aut tempora, modi, nemo veniam provident pariatur nulla inventore velit illum iure necessitatibus ut corporis, itaque praesentium reprehenderit quibusdam ipsa magni.</p>-->
      <!--a class="btn boton-vernoso btn-xl text-uppercase js-scroll-trigger" href="#">Ver Menu</a-->
      <a class="btn boton-vernoso btn-xl text-uppercase js-scroll-trigger" href="#"><?php the_field( 'boton2' ); ?></a>
  </div>
</div>
  </div>
</section>
 
 
  <section id="Menus">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
          
           <img class="img-fluid icon-menu" src=" <?php bloginfo('template_directory'); ?>/assets/img/icon-menu.png"/>
            <!--h2 class="section-heading text-uppercase">Menus</h2-->
               <h2 class="section-heading text-uppercase"><?php the_field( 'titulo_menu' ); ?></h2>
            <!--h3 class="section-subheading ">Lorem ipsum dolor sit amet consectetur.</h3-->
             <h3 class="section-subheading "><?php the_field( 'parrafo_menu' ); ?></h3>
          </div><br><br><br>
        </div>
        <div class="row text-center my-3">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bajarpoquito bac">
            <span>
              
            <img class="img-fluid icon-menu" src=" <?php bloginfo('template_directory'); ?>/assets/img/icon-desa.png"/>

              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <!--h4 class="service-heading">Desayunos</h4-->
           <h4 class="service-heading"><?php the_field( 'categoria1' ); ?></h4>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bac">
            <span >
            
              <img class="img-fluid icon-menu" src=" <?php bloginfo('template_directory'); ?>/assets/img/icon-cena.png"/>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <!--h4 class="service-heading">Cena</h4-->
           <h4 class="service-heading"><?php the_field( 'categoria2' ); ?></h4>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bac">
            <span >
             
    <img class="img-fluid icon-menu" src=" <?php bloginfo('template_directory'); ?>/assets/img/icon-post.png"/>

              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <!--h4 class="service-heading">Postres</h4-->
            <h4 class="service-heading"><?php the_field( 'categoria3' ); ?></h4>
          </div>
        </div>
      </div>
    </section>
<section id="suscribirse">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <!--h2 class="section-heading text-uppercase">Mantengase cerca</h2-->
              <h2 class="section-heading text-uppercase"><?php the_field( 'titulo3' ); ?></h2>
            <!--p class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</p-->
            <p class="section-subheading text-muted"><?php the_field( 'parrafo3' ); ?></p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 col-sm-12 p-4 my-auto text-center">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 text-center ">
                        <!--a class="btn btn-secondary btn-xl text-uppercase js-scroll-trigger" href="page-contacto.php">Suscribase</a-->
                         <a class="btn btn-secondary btn-xl  text-uppercase js-scroll-trigger" href="page-contacto.php"><?php the_field( 'boton3' ); ?></a>
                  </div>
              
                
               
            </form>
          </div>
        </div>
      </div>
    </section>

   <?php get_footer();?>
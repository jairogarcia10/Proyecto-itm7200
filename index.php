<?php get_header();?>
<header class="masthead bloqueInicio">
     <div class="container-fluid">
     <img class="img-fluid masthead" src=" <?php bloginfo('template_directory');?>/assets/img/00.png">
     
        <div class="intro-text">
          <div class="intro-lead-in">Tu Lugar Cotidiano</div>
          <div class="intro-heading text-uppercase">Bienvenidos a JK Restaurant</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#">Ver Menu</a>
        </div>
      </div>
    </header>
<!--header class="masthead">
 <img class="img-fluid bloqueInicio" src=" <?php bloginfo('template_directory');?>/assets/img/00.png">
     <div class="container">    
   <div class="bloqueInicio">
     
     
        <div class="bloque-texto">
          <div class="bloque-texto-01">Tu Lugar Cotidiano</div>
          <div class="bloque-texto-02 text-uppercase">Bienvenidos a JK Restaurant</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#">Ver Menu</a>
        </div>
      </div>
      
      </div> 
      </header-->
<section id='Nosotros'>
<div class="container-fluid">

<div class="row ">
 <div class="col-lg-6  ">
  <img class="img-fluid" src=" <?php bloginfo('template_directory'); ?>/assets/img/historia.png"/>
  </div>
  <div class="col-lg-6 sec02">
      <h1 class="h1">Nuestra historia</h1>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, aut tempora, modi, nemo veniam provident pariatur nulla inventore velit illum iure necessitatibus ut corporis, itaque praesentium reprehenderit quibusdam ipsa magni.</p>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#">Ver Menu</a>
  </div>
</div>
  </div>
</section>
 
 
  <section id="Menus">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
           <img class="img-fluid icon-menu" src=" <?php bloginfo('template_directory'); ?>/assets/img/icon-menu.png"/>
            <h2 class="section-heading text-uppercase">Menus</h2>
            <h3 class="section-subheading ">Lorem ipsum dolor sit amet consectetur.</h3>
          </div><br><br><br>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <img class="img-fluid icon-menu" src=" <?php bloginfo('template_directory'); ?>/assets/img/icon-desa.png"/>

              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Desayunos</h4>
          
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <img class="img-fluid icon-menu" src=" <?php bloginfo('template_directory'); ?>/assets/img/icon-cena.png"/>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Cena</h4>
         
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
    <img class="img-fluid icon-menu" src=" <?php bloginfo('template_directory'); ?>/assets/img/icon-post.png"/>

              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Postres</h4>
           
          </div>
        </div>
      </div>
    </section>
<section id="suscribirse">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Mantengase cerca</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6 centro">
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                
                </div>
               </div>
            </form>
          </div>
        </div>
      </div>
    </section>

   <?php get_footer();?>
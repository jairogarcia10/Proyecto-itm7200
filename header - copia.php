<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
   <?php wp_head();?>
</head>

<body <?php body_class();?>>
<!-- 
<div>
     <div class="mx-auto my-2 order-0 order-md-1 position-relative">
        <a class="mx-auto" href="#">
            <img class="img-fluid logo" src=" <?php bloginfo('template_directory'); ?> /assets/img/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>

<nav class="navbar navbar-expand-lg ">


    <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
        <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
                <a class="nav-link barra page" href="#">Inicio</a>
            </li>
            <li>
                <a href="" class="nav-link barra">Menu</a>
            </li>
             <li>
                <a href="" class="nav-link barra">Galeria</a>
            </li>
            
        </ul>
    </div>
   
    <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
        <ul class="navbar-nav mr-auto text-center">
            <li class="nav-item">
                <a class="nav-link barra" href="#">Reservaciones</a>
            </li>
             <li>
                <a href="" class="nav-link barra">Nosotros</a>
            </li>
             <li>
                <a href="" class="nav-link barra">Contacto</a>
            </li>
        </ul>
    </div>
</nav>
 -->

<h1 class="site-heading text-center text-white d-none d-lg-block ">
      <span class="site-heading-upper text-primary mb-3">
          <a class="mx-auto" href="#">
            <img class="img-fluid logo" src=" <?php bloginfo('template_directory'); ?> /assets/img/logo.png">
        </a>
     
    </h1>

    <!-- Navigation   -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"><img class="img-fluid logo" src=" <?php bloginfo('template_directory'); ?> /assets/img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
       <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive"> -->
         <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
		) );
        ?>
          <!--<ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded barra page" href="#">Inicio
       
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded barra " href="#">Menu</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded barra" href="#">Galeria</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded barra" href="#">Reservaciones</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded barra" href="#">Nosotros</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded barra" href="#">Contacto</a>
            </li>
          </ul> -->
        </div>
      <!--</div>-->
    </nav>
           <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
		) );
        ?>
   <div class="masthead">
      <img class="img-fluid masthead" src=" <?php bloginfo('template_directory'); ?> /assets/img/00.png">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Tu Lugar Cotidiano!</div>
          <div class="intro-heading text-uppercase">Bienvenidos a JK Restaurant</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Ver Menu</a>
        </div>
      </div>
      </div>
 





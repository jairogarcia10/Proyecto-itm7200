<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <!--link rel="shortcut icon" type="png" href="./assets/img/mifavicon.png" /-->
   <?php wp_head();?>
</head>

<body <?php body_class();?>>

<h1 class="site-heading text-center text-white d-none d-lg-block ">
      <span class="site-heading-upper text-primary mb-3">
          <a class="mx-auto" href="#">
            <img class="img-fluid logo" src=" <?php bloginfo('template_directory');?>/assets/img/logo.png" style="z-index: 1500; position:relative;">
        </a>
     </span>
    </h1>
    


    <!-- Navigation--> 
     
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container ">
      
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"><img class="img-fluid logo" src=" <?php bloginfo('template_directory'); ?>/assets/img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
          </button>
      
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
          </div>
       
     
    </nav>

    
      
 





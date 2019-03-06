<?php get_header();?>


<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center fondo"></div>
       
 <div class="col-lg-12 col-sm-12 col-md-12">
    
     
    <div class="noso text-white text-center arriba02 ">
    <!--<h1 class="intro-lead-in"><?php $title_item1 = get_post_meta ( get_the_ID ( ) , 'title_item1' , true ) ;
       echo $title_item1; ?></h1>-->
     <h1 class="intro-lead-in"> <?php the_field( 'titulo_inicio' ); ?></h1>
   
    </div>
   
   </div>
   </div>
   
    
</div>
  <section id="blancoGaleria">
   <div class="row mx-2">
         
           
          <div class="col-lg-12 text-center mt-5">
            <h2 class="text-dark"><u><?php the_field( 'titulo_vea_nuestra' ); ?></u></h2>
           <h3 class="text-dark"><?php the_field( 'subtitulo_galeria_imagenes' ); ?></h3>
          </div><br><br><br>
          
        </div>
        <div class="container-fluid">
      <div class="row mt-5 justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-11 text-center my-2">
                <div class="card">
               
                <?php if ( get_field( 'imagen01') ) { ?>
	            <img src="<?php the_field( 'imagen01' ); ?>" class="img-fluid" />
                <?php } ?>
                 <div class="card-body">
                    <p class="card-text"><?php the_field( 'titulo_imagen01' ); ?></p>
                 </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-11 text-center my-2 ">
                <div class="card" >
                
                 <?php if ( get_field( 'imagen02') ) { ?>
	             <img src="<?php the_field( 'imagen02' ); ?>" class="img-fluid" />
                 <?php } ?>
                 <div class="card-body">
                    <p class="card-text"><?php the_field( 'titulo_imagen02' ); ?></p>
                 </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-11 text-center my-2  ">
                <div class="card" >
                 <?php if ( get_field( 'imagen03') ) { ?>
	             <img src="<?php the_field( 'imagen03' ); ?>" class="img-fluid" />
                 <?php } ?>
                 <div class="card-body">
                    <p class="card-text"><?php the_field( 'titulo_imagen03' ); ?></p>
                 </div>
                </div>
            </div>
         
        </div>
        </div>
         <div class="container-fluid">
      <div class="row mt-5 justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-11 text-center my-2">
                <div class="card">
               
                <?php if ( get_field( 'imagen04') ) { ?>
	            <img src="<?php the_field( 'imagen04' ); ?>" class="img-fluid" />
                <?php } ?>
                 <div class="card-body">
                    <p class="card-text"><?php the_field( 'titulo_imagen04' ); ?></p>
                 </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-11 text-center my-2 ">
                <div class="card" >
                
                 <?php if ( get_field( 'imagen05') ) { ?>
	             <img src="<?php the_field( 'imagen05' ); ?>" class="img-fluid"/>
                 <?php } ?>
                 <div class="card-body">
                    <p class="card-text"><?php the_field( 'titulo_imagen05' ); ?></p>
                 </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-11 text-center my-2  ">
                <div class="card" >
                <?php if ( get_field( 'imagen06') ) { ?>
	            <img src="<?php the_field( 'imagen06' ); ?>" class="img-fluid"/>
                <?php } ?>
                 <div class="card-body">
                    <p class="card-text"><?php the_field( 'titulo_imagen06' ); ?></p>
                 </div>
                </div>
            </div>
         
        </div>
        </div>
       <div class="container-fluid">
      <div class="row mt-5 justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-11 text-center my-2">
                <div class="card">
               
                <?php if ( get_field( 'imagen07') ) { ?>
	            <img src="<?php the_field( 'imagen07' ); ?>" class="img-fluid" />
                <?php } ?>
                 <div class="card-body">
                    <p class="card-text"><?php the_field( 'titulo_imagen07' ); ?></p>
                 </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-11 text-center my-2 ">
                <div class="card" >
                
                 <?php if ( get_field( 'imagen08') ) { ?>
	             <img src="<?php the_field( 'imagen08' ); ?>" class="img-fluid"/>
                 <?php } ?>
                 <div class="card-body">
                    <p class="card-text"><?php the_field( 'titulo_imagen08' ); ?></p>
                 </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-11 text-center my-2  ">
                <div class="card" >
                 <?php if ( get_field( 'imagen09') ) { ?>
	             <img src="<?php the_field( 'imagen09' ); ?>" class="img-fluid"/>
                 <?php } ?>
                 <div class="card-body">
                    <p class="card-text"><?php the_field( 'titulo_imagen09' ); ?></p>
                 </div>
                </div>
            </div>
         
        </div>
        </div>
       <div class="container-fluid">
      <div class="row mt-5 justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-11 text-center my-2">
                <div class="card">
               
                <?php if ( get_field( 'imagen10') ) { ?>
	            <img src="<?php the_field( 'imagen10' ); ?>" class="img-fluid"/>
                <?php } ?>
                 <div class="card-body">
                    <p class="card-text"><?php the_field( 'titulo_imagen10' ); ?></p>
                 </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-11 text-center my-2 ">
                <div class="card" >
                
                 <?php if ( get_field( 'imagen11') ) { ?>
	             <img src="<?php the_field( 'imagen11' ); ?>" class="img-fluid"/>
                 <?php } ?>
                 <div class="card-body">
                    <p class="card-text"><?php the_field( 'titulo_imagen11' ); ?></p>
                 </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-11 text-center my-2  ">
                <div class="card" >
                 <?php if ( get_field( 'imagen12') ) { ?>
	             <img src="<?php the_field( 'imagen12' ); ?>" class="img-fluid"/>
                 <?php } ?>
                 <div class="card-body">
                    <p class="card-text"><?php the_field( 'titulo_imagen12' ); ?></p>
                 </div>
                </div>
            </div>
         
        </div>
        </div>
      
      
    </section>

       

    

      
    
<?php get_footer();?>
        
       
      
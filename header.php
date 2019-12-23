<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chavez Roofing Company</title>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

 <!--NAVBAR-->

   <section id="navegation" class="clearfix">
  

        <nav class="main-navbar">

              <div class="logo">
                  <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png">
              </div><!--logo-->

            <div class="navegation-pages">

              <div class="mobile-menu">

                 <a href="#" class="menu"> <i class="fa fa-bars" aria-hidden="true"></i></a>

              </div>

               
               <?php 
                  wp_nav_menu (array(
                     'theme_location' => 'main_menu',
                     'container_id' => 'navbar-pages',
                     'container_class' => 'navbar-collapse collapse',
                    

                    ));


               ?>



            </div><!--navigation-pages-->

       </nav>

  </section><!--NAVBAR-->


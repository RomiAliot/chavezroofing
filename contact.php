<?php
/*
* Template Name: Contact
*/
get_header(); 
?>

<!-- PAGE HEADER-->

        <section id="page-header" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-header.jpg)">

          <div class="jumbotron services-hero">

            <div class="container article overlay services-img">
             
            </div>
            <div class="services-overlay"> <h1>CONTACT US</h1></div>
          </div>

        </section>


<!-- CONTACT TITLE-->
       
       <section id="service-page-title">

            <h2> FEEL FREE<span class="blue"> TO CONTACT US FOR ANY QUOTE OR INQUIRY</span></h2>
            <hr align="left" class="line-blue">

       </section>



<!-- CONTACT FORM-->

  <section id="contact" class="container-fluid">
       
       <section id="contact-form" class="col-lg-8">

          <? while(have_posts()): the_post(); ?>

            <?php the_content(); ?>
            
          <?php endwhile; ?>

       </section>

        <section id="contact-info" class="col-lg-4">

          <div class="container-fluid">

            <div class="info-icon col-lg-4">
              <i class="fa fa-home" aria-hidden="true"></i>
              
            </div>

             <div class="info-text col-lg-8">
               <h3>HOURS: </h3>
               <br>
               <p>Monday-Friday<br>
               8 am – 6 pm</p>
              
            </div>

            <div class="container-fluid">

            <div class="info-icon col-lg-4">
              <i class="fa fa-phone" aria-hidden="true"></i>
              
            </div>

             <div class="info-text col-lg-8">
               <h3>PHONE NUMBER: </h3>
               <br>
               <p><strong>For English:</strong><br>
                Lacey (801) 857-7461 </p>
               
                <p><strong>For English:</strong><br>
                Lacey (801) 857-7461 </p>
              
            </div>


          </div>

            
       </section>


   </section>


<?php get_footer(); ?>
<?php
get_header(); 
?>

<!-- HERO CAROUSEL-->
  <section id="hero-carousel">

     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
                <div class="item active main-hero-overlay">
                  
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-1.jpg" alt="chavez roofing">
                    <div class="hero-overlay"></div>
                
                </div>
                <div class="item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-2.jpg"  alt="chavez roofing">
                  <div class="hero-overlay"></div>
                </div>
            <div class="carousel-caption">
                    <h1>Let Us Help Put A Roof Over Your Head</h1>
                    <p>We are a new residential roofing company<br> 
                       with 15 years’ experience<p>
                    <button class="main-button"> CONTACT US </button>
            </div>
          </div>


        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="icon-prev" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="icon-next" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

    </div>

  
  <! -- ABOUT SECTION-->

  <section id="section-about-us">

    <div class="container">
       
       <div id="about-us" class="about-us col-lg-6 col-md-5 col-sm-5">

            <h2> ABOUT <span class="blue">OUR COMPANY</span></h2>
            <hr align="left" class="line-blue">
            <p>We are a new residential roofing company, 
            with 15 years experience. Family owned and operated.
            We will never try to up sale a customer, if all they need 
            is a repair, that’s what they will get.  We will evaluate the 
            roof, let them know the best option and respect 
            their decision.  </p>
            <ul class="about-list">
              <li><i class="fa fa-circle" aria-hidden="true"></i> Honest</li>
              <li><i class="fa fa-circle" aria-hidden="true"></i> Respectful</li>
              <li><i class="fa fa-circle" aria-hidden="true"></i> Reliable</li>
              <li><i class="fa fa-circle" aria-hidden="true"></i> Professional</li>
            </ul>
            <button class="main-button"> SERVICES </button>

       </div>
       
       <div  class="about-img col-lg-1 col-md-1 col-sm-1"></div>

       <div id="about-img" class="about-img col-lg-5 col-md-5 col-sm-5">

          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-img.png"  alt="chavez roofing" class="img-responsive">
         
       </div>

    </div>


  </section>


  <! -- SERVICES PAGES-->

  <section id="section-services">

    <div class="container">
       
       <div id="services" class="services">

            <h2> SERVICES <span class="blue">WE OFFER</span></h2>
            <hr align="center" class="line-blue">

       </div>
       

       <div id="services-list">

            <section class="service col-md-5ths col-xs-6">

              <div class="service-box">

                <div class="service-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Roof_Repairs.jpg">
                </div>
                <div class="service-title">
                   
                   <h3><a href="">Roof Repairs</a></h3>

                </div>

              </div>
              
            </section>

            <section class="service col-md-5ths col-xs-6">

              <div class="service-box">

                <div class="service-img">
                    <img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calculation.jpg>
                </div>
                <div class="service-title">
                   
                   <h3><a href="">Free Estimates </a></h3>

                </div>

              </div>
              
            </section>

            <section class="service col-md-5ths col-xs-6">

              <div class="service-box">

                <div class="service-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tear-offs.jpg">
                </div>
                <div class="service-title">
                   
                   <h3><a href="">Tear-Offs </a></h3>

                </div>

              </div>
              
            </section>

            <section class="service col-md-5ths col-xs-6">

              <div class="service-box">

                <div class="service-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/re-roofs.jpg">
                </div>
                <div class="service-title">
                   
                   <h3><a href="">Re-Roofs </a></h3>

                </div>

              </div>
              
            </section>

            <section class="service col-md-5ths col-xs-6">

              <div class="service-box">

                <div class="service-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/New_Construction.jpg">
                </div>
                <div class="service-title">
                   
                   <h3><a href="service.php">New Construction</a></h3>

                </div>

              </div>
              
            </section>
         



       </div>


    </div><!--CONTAINER-->

 </section><!-- SERVICES -->

   <!-- TESTIMONIALS SECTION-->

  
  <section id="testimonials">


       <div class="testimonials-title">

         <h2><span class="h2-white">TESTIMONIALS</span></h2>
        <hr align="center" class="line-white">

       </div>


       <div class="testimonials-item">


           <div class="testimonial-container">


                <div class="slider">

                    <div class="row testimonial-slide">
                      
                       <div class="col-lg-2 col-md-2 col-xs-1">
                         <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonial-1.png">
                       </div>
                       <div class="col-lg-10 col-md-10 col-xs-12">
                         <p class="client"> Linda Burtch </p>
                         <p> <i class="fa fa-quote-left" aria-hidden="true"></i>   Alberto is prompt, courteous, and does excellent roofing work! He is priced better than most 
                        competitors, and works quickly to get jobs done. I am a Realtor, and run into roofing issues often in 
                        my profession, and Alberto is a solid recommendation to my clients that have roofing issues. I would
                         recommend him anytime! </p>
                       </div>

                    </div>
                    <hr align="center" class="line-white">


                     <div class="row testimonial-slide">
                      
                       <div class="col-lg-10 col-md-10 col-xs-12">
                         <p class="client"> T. Reynolds</p>
                         <p> <i class="fa fa-quote-left" aria-hidden="true"></i>"Alberto is my go-to roofer. I recommend him to everyone I meet. He is very humble, dependable, honest and hardworking. He will not try to upsell you on anything, if all your roof needs is a repair, then he will tell you and give you options and actually listens to what you want done. Anyone who needs a roof done should contact Chavez Roofing LLC." </p>
                       </div>
                       <div class="col-lg-2 col-md-2 col-xs-1 ">
                         <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonial-1.png">
                       </div>

                    </div>      
                
                </div>
          </div>

       </div>

  </section><!--testimonials section-->


<!-- PTOJECTS SECTION-->

    <section id="projects-section">

        <h2> OUR<span class="blue"> LATEST PROJECTS</span></h2>
        <hr align="center" class="line-blue">

    <div id="latest-projects" class="">

      <div class="container projects-imgs">

       

        <div class="project-home col-lg-5 col-md-5">
       
           <?php the_field('project-1'); ?>


        </div>

        <div class="col-lg-2"></div>
        <div class="project-home col-lg-5 col-md-5">
       
            <?php the_field('project-2'); ?>


        </div>

     

    </div><!---row-->
  </div>

</section><!-- LATEST PROJECTS-->

<!-- QUOTE SECTION-->


  <section id="quote-section" class="quote-overlay">
    

     <div class="quote-title">
       
        <h2><span class="h2-white">REQUEST A QUOTE</span></h2>
        <hr align="center" class="line-white">

     </div>

     <div id="quote-form">


        <? while(have_posts()): the_post(); ?>

            <?php the_content(); ?>
          <?php endwhile; ?>


     </div>


  </section>



<?php
get_footer();
?>
<?php
/*
* Template Name: Services
*/
get_header(); 
?>

<body>
   

  <! --HEADER -->

        <section id="page-header" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-header.jpg)">

          <div class="jumbotron services-hero">

            <div class="container article overlay services-img">
             
            </div>
            <div class="services-overlay"> <h1>OUR SERVICES</h1></div>
          </div>

        </section>



<! -- TITLE-->
       
       <section id="service-page-title">

            <h2> LOOKING <span class="blue">FOR A QUALITY ROOFING CONTRACTOR FOR YOUR NEXT PROJECT?</span></h2>
            <hr align="left" class="line-blue">

       </section>


<! -- SERVICES -->

    <section id="all-services">

      <?php 

       $args = array (
        'post_type' => 'services',
        'posts_per_page' => '-1',
        'orderby' => 'title',
        'order' => 'ASC',
      
        );

       $services = new WP_Query($args);
       while($services ->have_posts()): $services->the_post();

    ?>

     <main class="each-service">

           <div class="container-fluid">

              <div class="each-service-img col-lg-3 col-md-3 col-sm-3">
                
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']); ?>


              </div>

              <div class="each-service-text col-lg-9 col-md-9 col-sm-9">
                 
                 <h3><?php the_title(); ?> </h3>
                 <?php the_content(); ?>

                <button class="main-button"> REVIEWS </button>

              </div>

           </div>

        </main><!--each service-->



     <?php endwhile; wp_reset_postdata(); ?>

        

    </section>


<!-- QUOTE SECTION-->


  <section id="quote-section" class="quote-overlay">
    

     <div class="quote-title">
       
        <h2><span class="h2-white">REQUEST A QUOTE</span></h2>
        <hr align="center" class="line-white">

     </div>

     <div id="quote-form">
       <?php while(have_posts()): the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>   

     </div>


  </section>

<!-- CUSTOM REVIEWS-->
       
       <section id="service-page-title">

         

            <h2> CUSTOMERS  <span class="blue">REVIEWS</span></h2>
            <hr align="left" class="line-blue">

          <div class="comments-list-services">

            <ul class="list-comments">

               <?php 
                 $comments = get_comments(array(
                     'post_id' => $post->ID,
                     'status'=>'approve'

                  ));
                 wp_list_comments(array(
                   'per_page' => 20,
                   'reverse_top_level' => false

                  ), $comments);

                ?>



            </ul>




          </div>
        

          <div class="comments-form-reviews">
           
           <?php while(have_posts()): the_post(); ?>

            <?php comment_form(); ?>

        <?php endwhile; ?>   

          </div>
         
       </section>



<?php
get_footer();
?>

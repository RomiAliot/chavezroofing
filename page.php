<?php

get_header(); 
?>

<body>

 <! --HEADER -->

        <section id="page-header" style="background-image: url(http://chavezroofingllc.com/wp-content/uploads/2017/11/page-header.jpg)">

          <div class="jumbotron services-hero">

            <div class="container article overlay services-img">
             
            </div>
            <div class="services-overlay"> <h1>PAYMENT</h1></div>
          </div>

        </section>




<?php while(have_posts()): the_post(); ?>

            <?php the_content(); ?>

 <?php endwhile; ?>   








<?php
get_footer();
?>
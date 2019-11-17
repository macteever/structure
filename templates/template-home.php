<?php /* Template Name: Home */
   get_header(); ?>
   <main role="main" class="home-main">
     <section id="home-top" class="container-fluid" style="background: -webkit-linear-gradient(264deg, rgba(0,0,0,0.00) 31%, rgba(0,0,0,0.37) 99%);
    				background: -o-linear-gradient(264deg, rgba(0,0,0,0.00) 31%, rgba(0,0,0,0.37) 99%);
    				background: linear-gradient(264deg, rgba(0,0,0,0.00) 31%, rgba(0,0,0,0.37) 99%),
            url(<?php the_field('home_bkg'); ?>); background-size: cover;">
         <div class="container">
           <div class="row justify-content-center home-top-content align-items-center">
             <h1 class="futura-bold fs-60"><?php the_title(); ?></h1>
           </div>
         </div>
     </section>
   </main>
<?php get_footer(); ?>

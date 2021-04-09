<?php /*Template Name: Internal Page Template*/ ?>

<?php get_header(); ?>

<div class="main-content internal-div">

        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();?>
              <?php the_content();
            }
          }
        ?>

</div>

<?php get_footer(); ?>

<?php /*Template Name: Protected Page Template*/ ?>

<?php get_header(); ?>

<div class="main-content internal-div">
<div class="container">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();?>
              <?php the_content();
            }
          }
        ?>

</div>
</div>
<?php get_footer(); ?>

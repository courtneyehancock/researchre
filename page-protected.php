<?php /*Template Name: Protected Page Template*/ ?>

<?php get_header(); ?>

<div class="main-content internal-div">
  <h1 style="color: #00529b; font-size: 2em; text-align: right; margin-right: 2em;">ATTENDEE PROFILES</h1>

<hr />
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

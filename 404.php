<?php /*Template Name: 404 Page*/?>
<?php get_header(); ?>

<div class="container mt-5 mb-5">
  <div class="not-found">
    <img src="https://pwd.aa.ufl.edu/wp-content/uploads/2021/05/Telescope-Icon-404.png" class="img-fluid mt-5 pt-5" style="max-width:300px;"/>

    <h1 class="mt-4">OOPS! PAGE NOT FOUND</h1>
    <h2>This usually never happens.</h2>
    <p>It looks like nothing was found at this location. Would you like to go back <a href="<?php echo home_url('/');?>">home</a>?</p>
  </div>
</div>

<?php get_footer(); ?>

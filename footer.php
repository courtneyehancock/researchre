<footer>
  <div class="container pb-5">
    <div class="row">
      <div class="col-lg-4">
        <!--Logo/text widget-->
        <?php dynamic_sidebar('left-footer'); ?>
      </div>
      <div class="col-lg-3">
        <!--Middle Footer-->
        <?php dynamic_sidebar('middle-footer'); ?>
      </div>
      <div class="col-lg-2">
        <!--Middle Right Footer-->
        <?php dynamic_sidebar('middle-right-footer'); ?>
      </div>
      <div class="col-lg-3">
        <!--right footer-->
        <?php dynamic_sidebar('right-footer'); ?>
      </div>
    </div>
  </div>

  <div class="container-fluid final-footer">
    <div class="row">
      <div class="col-lg-8">
        <p> © <?php echo date("Y"); ?> University of Florida Conference Department | <a href="mailto:cehancock@mail.ufl.edu">Website Feedback</a></p>
      </div>
      <div class="col-lg-2">
        <a href="https://conferences.aa.ufl.edu/" target="_blank"><img alt="PWD Logo" src="https://pwd.aa.ufl.edu/researchre-pro/wp-content/uploads/sites/8/2020/07/uf-conference-white-update.png"/></a>
      </div>
      <div class="col-lg-2">
        <a href="https://www.ufl.edu/" target="_blank"><img alt="UF Logo" src="https://cwde.aa.ufl.edu/wp-content/uploads/sites/2/2020/05/UF_Signature_white.png"/></a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

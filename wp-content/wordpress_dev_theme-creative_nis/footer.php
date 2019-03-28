
  <!-- Footer -->
  <footer class="bg-light py-5">

    <div class="row">
      <div class="col-md-6 mb-5 mb-lg-0">
          <?php dynamic_sidebar('sidebar_footer_left'); ?>
      </div>
      <div class="col-md-6 mb-5 mb-lg-0">
        <?php dynamic_sidebar( 'sidebar_footer_right'); ?>
      </div>
    </div>

    <hr>

    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Start Bootstrap</div>
    </div>

  </footer>

  <?php
    wp_footer();
  ?>
</body>

</html>

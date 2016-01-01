<footer class="content-info">
  <div class="container">
      <img class="img-responsive reactors" src="<?= get_template_directory_uri();?>/assets/images/reactors.svg" alt="Reactors"/>
      <div class="col-sm-6 logo">
          <img class="img-responsive logo-small" src="<?= get_template_directory_uri();?>/assets/images/logo_footer.svg" alt="Logotipo AtomicPosts"/>
          <div class="logo-name">
              <span>Atomic</span>
              <span>Posts</span>
          </div>
      </div>
      <div class="col-sm-6">
          <?php dynamic_sidebar('sidebar-footer'); ?>
      </div>
  </div>
</footer>

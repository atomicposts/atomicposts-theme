<footer class="content-info">
  <div class="container">
      <img class="img-responsive reactors" src="<?= get_template_directory_uri();?>/dist/images/reactors.svg" alt="Reactors"/>
      <div class="col-sm-6 logo">
          <img class="img-responsive logo-small" src="<?= get_template_directory_uri();?>/dist/images/logo_footer.svg" alt="Logotipo AtomicPosts"/>
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

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-80412804-1', 'auto');
    ga('send', 'pageview');

</script>

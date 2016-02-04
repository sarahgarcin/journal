
  <footer role="contentinfo">


  </footer>

  <!-- scripts -->
  <?php if ( c::get('environment') == 'local' ) : ?>

  <?= js('bower_components/jquery/dist/jquery.js') ?>
  <?= js('bower_components/foundation/js/foundation.min.js') ?>
  <?= js('bower_components/jquery-ui/jquery-ui.min.js') ?>
  <?= js('bower_components/velocity/velocity.js') ?>
  <?= js('bower_components/packery/dist/packery.pkgd.min.js') ?>
  <?= js('assets/js/main.js') ?>

  <?php else: ?>

  <?= js('assets/production/all.min.js') ?>

  <?php endif ?>

</body>
</html>

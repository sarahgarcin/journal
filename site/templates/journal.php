<?php snippet('header') ?>

<main class="journal">
  <div class="double-page">
    <div class="page left">
      <?php snippet('programme-last') ?>
    </div>
    <div class="page right">
      <?php snippet('titre') ?>
      <?php snippet('couverture') ?>
    </div>
  </div>
  <div class="double-page">
   <?php snippet('programme') ?>
    <div class="page left absolute">

    </div>
    <div class="page right absolute">

    </div>
  </div>
  <div class="double-page">
    <div class="page left">
      <?php snippet('ressources-left') ?>
    </div>
    <div class="page right">
    <?php snippet('ressources-right') ?>
    </div>
  </div>
  <div class="double-page">
    <div class="page left">
      <?php snippet('images-left') ?>
    </div>
    <div class="page right">
    <?php snippet('images-right') ?>
    </div>
  </div>

</main>

<?php snippet('footer') ?>

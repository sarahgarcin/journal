<div class="couverture">
	<div class="cover-image">
	<?php if(!$page->postimage()->empty()):
		$file = $page->postimage()->toFile();?>
    <img src="<?php echo $file->url() ?>" alt="">
  <?php endif ?>
	</div>
  <div class="text medium-9">
    <?php echo $page->find('couverture')->text()->kirbytext() ?>
  </div>
  <div class="text english medium-9">
    <?php echo $page->find('couverture')->english()->kirbytext() ?>
  </div>
</div>


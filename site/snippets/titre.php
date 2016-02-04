<div class="titre">
  <h1 class="medium-11 "><?php echo $page->title() ?></h1>
	<div class="date right medium-1 ">
		<h3><?php echo $page->date('d')?></h3>
		<h3><?php echo $page->date('m')?></h3>
		<h3><?php echo $page->date('Y')?></h3>
	</div>
	<h3 class="subtitle"><?php echo $page->subtitle()->html()?></h3>
	<!-- <h3 class="authors medium-12"><?php echo $page->authors()?></h3> -->
</div>


<?php

snippet('header');

?>
<div class="home container">
	 <?php foreach ($page->children()->visible() as $journal) :?>
	 	<h2>
	 		<a href="<?php echo $journal->url()?>" title="<?php echo $journal->title()?>">
	 			<?php echo $journal->title()->html()?>
	 		</a>
	 	</h2>
	 <?php endforeach ?>
</div>
<?php 
snippet('footer');

?>
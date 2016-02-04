<div class="ressources">
  <h1><?php echo $page->find('ressources')->title()?></h1>
  <?php
  $ressources = $page->find('ressources')->children()->visible();
  $ressoucesArr = $ressources->toArray();
  $size = $ressources->count();
 //print_r($ressoucesArr);?>

  <ul>
  <?php for($i=0; $i<2; $i++){ ?>
  	<li class="ressource-item">
  		<h2><?php echo html($ressoucesArr[$i]['title'])?></h2>
			<?php echo kirbytext($ressoucesArr[$i]['content']['text'])?>
  	</li>
  <?php } ?>
  </ul>
</div>


<?php snippet('header') ?>

<main class="page journal">
  	<div class="marge">
  	  <header class="header-journal">
  			<h1><?php echo $page->title()->html()?></h1>
  			<div class="date right">
	  			<h3><?php echo $page->date('d')?></h3>
	  			<h3><?php echo $page->date('m')?></h3>
	  			<h3><?php echo $page->date('Y')?></h3>
	  		</div>
  			<h3 class="authors"><?php echo $page->authors()?></h3>
  		</header>
  		<div class="content">
  		<?php foreach($page->children()->visible() as $article):?>
  			<article class="article">
  				<h2><?php echo $article->title()->html()?></h2>
					<?php echo $article->text()->kirbytext()?>
  			</article>
  		<?php endforeach ?>
  		</div>
		</div>
		<?php $image = $page->images()->first();?>
		<div class="big-image" data-image="<?php echo $image->url()?>">
  		<img src="<?php echo $image->crop(1000, 1500)->url()?>" alt="<?php echo $page->title()?>">
  	</div>
</main>

<?php snippet('footer') ?>

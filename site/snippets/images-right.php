<div class="images">
  <?php $count = 0; ?>
  <?php 
  $images = $page->find("images")->images()->toArray();
  $size = $page->find("images")->images()->count();
  ?>
  <ul>
    <?php for($i=$size/2; $i<$size; $i++){?>
      <li class="image-item <?php echo $page->find("images")->taille() ?>">
        <figure>  
          <img src="<?php echo $images[$i]['url'] ?>" alt="<?php echo $images[$i]['title']?>">
            <figcaption>
              <div class="caption">
                <?php echo $images[$i]['caption'] ?>
              </div>
            </figcaption>
        </figure>
      </li>
    <?php } ?>
  </ul>
</div>


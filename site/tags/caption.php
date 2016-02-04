<?php

kirbytext::$tags['caption'] = array(
  'html' => function($tag) {
    $caption = $tag->attr('caption');
    
    $html = '<figcaption>'.$caption.'</figcaption>';
    return $html;

  }
);
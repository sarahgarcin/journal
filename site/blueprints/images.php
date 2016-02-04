<?php if(!defined('KIRBY')) exit ?>

title: Images
pages: false
files: true
fields:
  title:
    label: Titre
    type:  text
files:
  fields:
    caption:
      label: Légende
      type: markdown
    taille:
      label: Taille de l'image
      type: text
      help: w1 pour grande image, w2 pour moyenne image, w3 pour petite image, w4 pour toute petite image
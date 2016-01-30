<?php if(!defined('KIRBY')) exit ?>

title: Images
pages: false
files: true
fields:
  title:
    label: Titre
    type:  text
	taille:
		label: Taille des images
		type: radio
		options:
			w1: Grand
			w2: Moyen
			w3: Petit
files:
  fields:
    caption:
      label: Légende
      type: markdown
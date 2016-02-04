<?php if(!defined('KIRBY')) exit ?>

title: Journal
pages: true
files: true
fields:
  title:
    label: Titre
    type:  text
  subtitle:
    label: Sous-titre
    type:  text
  jour:
    label: Jour
    type:  text
  date:
    label: Date
    type:  date
  postimage:
    label: Image de fond
    type:  selector
    mode:  single
    types:
      - image
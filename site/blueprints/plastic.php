<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
    
  number:
    label: Plastic Number
    type:  number

  recyclable:
    label: Is it recyclable?
    type: toggle
    text: yes/no

  reuse:
    label: Is it safe to reuse?
    type: toggle
    text: yes/no

  info:
    label: Plastic Information and Uses
    type: textarea

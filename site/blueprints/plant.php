<?php if(!defined('KIRBY')) exit ?>

title: Plant
pages: false
files: true
fields:
  title:
    label: Plant Name (Common)
    type: text
    width: 1/2

  taxonomical_name:
    label: Plant Name (Taxonomical)
    type: text
    width: 1/2

  about:
    label: About
    type: textarea

  resources:
    label: link
    type: url

  type:
    label: Plant Type
    type: radio
    options:
      Houseplant: Houseplant
      Evergreen: Evergreen
      Deciduous: Deciduous
      Succulent: Succulent
      Greenhouse: Greenhouse
      Vine: Vine

  growth:
    label: Grows Best In?
    type: radio
    options:
      Sun: Sun
      Shade: Shade

  when_to_plant:
    label: Best Time to Plant
    type: select
    options:
      summer: Summer
      fall: Fall 
      winter: Winter
      spring: Spring

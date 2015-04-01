<?php if(!defined('KIRBY')) exit ?>

title: plant options
pages: false
files: true
fields:
  title:
    label: Title
    type: text

  about:
    label: Text
    type: textarea     

  resources:
    label: link
    type: url 

  type:
    label: Categories
    type: checkboxes
          
  growth:
    label: Grows Best In?
    type: toggle
    text: sun/shade

  when_to_plant:
    label: Best Time to Plant
    type: select
      options:
        summer: Summer
        fall: Fall 
        winter: Winter
        spring: Spring

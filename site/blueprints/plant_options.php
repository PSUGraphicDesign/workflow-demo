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
        label: catagories
        type: checkboxes
          
    growth:
      label: Grows best in?
      type: toggle
      text: sun/shade

    when to plant:
      label: best time to plant
      type: select
        options:
          summer: Summer
          fall: Fall 
          winter: Winter
          spring: Spring


    


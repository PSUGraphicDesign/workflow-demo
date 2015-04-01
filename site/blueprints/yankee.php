<?php if(!defined('KIRBY')) exit ?>

title: New York Yankees
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
   
  website:
    label: link
    type: url

  text: 
    label: Text
    type:  textarea

  gallery:
    label: Link to Gallery of Player Images
    website: url

  categories:
    label: Categories
    type: checkboxes
    default: positions
    options:
      Catcher: Catcher
      First Baseman: First Baseman


<?php if(!defined('KIRBY')) exit ?>

title: New York Yankee Player
pages: false
files: true
fields:
  title:
    label: Player Name
    type:  text
   
  website:
    label: Link to More Player Info
    type: url

  text: 
    label: Text
    type:  textarea

  gallery:
    label: Link to Gallery of Player Photographs
    website: url

  categories:
    label: Positions
    type: checkboxes
    options:
      Catcher: Catcher
      First Baseman: First Baseman


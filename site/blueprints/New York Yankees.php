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

  images:
    label:link
    website: url

    fields:
  categories:
    label: Categories
    type: checkboxes
    default: architecture
    options:
      design: Design
      architecture: Architecture
      photography: Photography
      3d: 3D
      web: Web


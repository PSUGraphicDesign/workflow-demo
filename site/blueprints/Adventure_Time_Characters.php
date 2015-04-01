<?php if(!defined('KIRBY')) exit ?>

title: Adventure Time Characters
pages: true
files: true
fields:
  title:
    label: Character Name
    type:  text

  role:
    label: Role of Character
    type:  Text
    
  author:
    label: Author
    type: User

  date:
    label: Date
    type: Date

  info:
    label: Info
    type: Info
    text: >

  episodes:
    label: episodes
    type: textarea

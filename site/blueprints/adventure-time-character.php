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
    
  voice:
    label: Voice Actor
    type: text

  date:
    label: Date
    type: Date

  info:
    label: Info
    type: textarea

  episodes:
    label: Episode List
    type: structure
    entry: >
      <strong>Season</strong> {{season}}, <strong>Episode</strong> {{episode}}
    fields:
      season:
        label: Season
        type: number
      episode:
        label: Episode
        type: number

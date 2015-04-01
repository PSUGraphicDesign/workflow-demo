<?php if(!defined('KIRBY')) exit ?>

title: Cheese
pages: true
files: true
fields:
  title:
    label: Type of Cheese
    type:  text
    
  location:
    label: Origin Location
    type:  text

  age:
    label: Aging Length
    type: number

  milk_type:
    label: Type of Milk
    type: checkboxes
    options:
      Cow: Cow
      Sheep: Sheep
      Goat: Goat

  flavor:
    label: Flavor
    type: textarea

  pairings:
    label: Pair With
    type: textarea




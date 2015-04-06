<?php if(!defined('KIRBY')) exit ?>

title: Spiced Rum
pages: false
files: true
fields:
  title:
    label: Rum Name
    type:  text
    
  website:
    label: Distillery's Website
    type: url

  history:
    label: History
    type: textarea

  country_origin:
    label: Country of Origin
    type: text

  flavor:
    label: Tasting Notes
    type: textarea

  drinks:
    label: Drink Recipes
    type: structure
    entry: >
      <p><strong>{{name}}</strong></p>
      <p><em>{{ingredients}}</em></p>
      <p>{{instructions}}</p>
    fields:
      name:
        label: Drink Name
        type: text
      ingredients:
        label: Ingredient List
        type: textarea
      instructions:
        label: Mixing Instructions
        type: textarea

  email:
    label: Contact
    type: email

<?php if(!defined('KIRBY')) exit ?>

title: Spiced Rum
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
    
  website:
    label: Link
    type: url

  history:
    label: History of Spiced Rum
    type: textarea

  country_origin:
    label: Country of Origin
    type: text

  flavor:
    label: Flavors
    type: select
    options:
      Cruzan 9: Cruzan 9
      Captain Morgan: Captain Morgan
      The Kracken: The Kracken
      Sailor Jerry: Sailor Jerry

  drinks:
    label: Drink Recipes
    type: select
    options:
      Cruzan 9: Cruzan 9
      Captain Morgan: Captain Morgan
      The Kracken: The Kracken
      Sailor Jerry: Sailor Jerry

  email:
    label: Contact
    type: email

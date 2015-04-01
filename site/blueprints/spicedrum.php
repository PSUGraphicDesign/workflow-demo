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
    type: textarea

  flavor:
    label: Flavors
    type: select
    options:
      cruzan: Cruzan 9
      captain: Captain Morgan
      kracken: The Kracken
      sailor: Sailor Jerry

  drinks:
    label: Drink Recipes
    type: select
    options:
      cruzan: Cruzan 9
      captain: Captain Morgan
      kracken: The Kracken
      sailor: Sailor Jerry

  email:
    label: Contact
    type: email

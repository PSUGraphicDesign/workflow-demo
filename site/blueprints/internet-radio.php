<?php if(!defined('KIRBY')) exit ?>

title: Internet Radio
pages: false
files: true
fields:
  title:
    label: Title
    type:  text

  website:
  	label: Link
    type: url

  founded:
    label: Date Founded
    type: date
    
  history:
    label: Text
    type:  textarea

  active_users:
    label: Current Number of Subscribers
    type: textarea

  subscription_features:
    label: List of Premium Features
    type: textarea

  subscription_cost:
    label: Monthly Subscription Fee
    type: textarea

  options:
    label: Subscription Options
    type: checkboxes
    options:
      free: Free with ads
      paid: Subscription based no ads

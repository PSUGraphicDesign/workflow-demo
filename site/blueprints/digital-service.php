<?php if(!defined('KIRBY')) exit ?>

title: Digital Services
pages: true
files: true
fields:
  title:
    label: Title
    type:  text

  website:
    label: Link
    type: url

  user_count:
    label: Number of Active Users
    type: number

  history:
    label: A Brief History of the Service
    type: textarea

  date_founded:
    label: Date Founded
    type: date


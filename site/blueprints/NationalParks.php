<?php if(!defined('KIRBY')) exit ?>

title: National Parks
pages: false
files: true
fields:
    title:
      label: Park Name
      type:  text

    area: 
      label: Area in Square Miles
      type: number

    location:
      label: location
      type: select
      options:
        oregon: Oregon
        washington: Washington
        utah: Utah
        maine: Maine

    history:
      label: History of the National Parks
      type: textarea

    phone:
      label: Phone
      type: phone

    wildlife:
      label: Wildlife Encounters
      type: text area

    season:
      label: season
      type: select
      options:
        summer: Summer
        fall: Fall
        winter: Winter
        spring: Spring

    jobs:
      label: Jobs Available
      type: select
      options:
        wrangler: Wrangler
        giftshop: Gift Shop
        server: Server
        housing: Housing
  

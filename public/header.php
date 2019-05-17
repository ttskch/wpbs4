<?php
/*
Template Name: wpbs4
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/images/logo.png" type="image/png">
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/logo.png" type="image/x-icon">

  <link href="<?php bloginfo('template_url'); ?>/assets/css/vendors.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/css/app.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-dark'); ?>>

<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?php bloginfo('url') ?>">
      <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="Logo" width="25" height="25" class="mr-1">
      <span style="white-space:normal"><?php bloginfo('name'); ?></span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1">
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="#" class="nav-link">Item</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown-1" role="button" data-toggle="dropdown">
            Dropdown
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown-1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

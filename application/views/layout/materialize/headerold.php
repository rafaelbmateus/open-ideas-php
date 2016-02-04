<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Plataforma de inovação aberta. ">
  <meta name="keywords" content="open innovation, inovação aberta, innovation, inovação,">
  <title><?php echo $this->config->item ( 'app_title' ); ?></title>

  <!-- Favicons-->
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/app/icons/oi/oi-xxxhdpi.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/images/app/icons/oi/oi-xxxhdpi.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <!-- For Windows Phone -->
  <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/images/app/icons/oi/oi-xxxhdpi.png">

  <!-- Core css -->
  <link href="<?php echo base_url(); ?>assets/plugins/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets/plugins/materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- Font awesome-->
  <link href="<?php echo base_url(); ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- DataTables -->
  <!-- <link href="<?php echo base_url(); ?>assets/plugins/datatables/datatables.min.css" rel="stylesheet"/> -->

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?php echo base_url(); ?>assets/plugins/materialize/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets/plugins/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets/plugins/materialize/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
  <!-- Page Loading - start -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- Page Loading - end -->

  <header id="header" class="page-topbar">
        <!-- header nav - start -->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a href="<?php echo base_url(); ?>" class="brand-logo darken-1"><img width="30" height="35" src="<?php echo base_url(); ?>assets/images/app/icons/o/o-xxxhdpi.png" alt="materialize logo">pen <img width="12" height="33" src="<?php echo base_url(); ?>assets/images/app/icons/i/i-xxxhdpi.png" alt="materialize logo">dea</a></h1>
                    <!-- <h1 class="logo-wrapper"><a href="<?php echo base_url(); ?>" class="brand-logo darken-1"><img src="<?php echo base_url(); ?>assets/plugins/materialize/images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1> -->
                    <ul class="right hide-on-med-and-down">
                        <li class="search-out"><input type="text" class="search-out-text"></li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a></li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a></li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a></li>
                        <!-- Dropdown Trigger -->
                        <!--<li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a></li>-->
                    </ul>
                </div>
            </nav>
        </div>
        <!-- header nav - end-->
  </header>

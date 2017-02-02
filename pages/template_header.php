<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" href="<?php echo(URL); ?>/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo(URL); ?>/favicon.ico" type="image/x-icon">
    <title>Apartment Galeon Torrevieja, Costa Blanca Spain</title>
    <link href="<?php echo(URL); ?>/style/css/style.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="<?php echo(URL); ?>/scripts/lightbox.min.js"></script>
    <script src="<?php echo(URL); ?>/scripts/jquery.smooth-scroll.min.js"></script>
    
    <link href="<?php echo(URL); ?>/scripts/css/lightbox.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|PT+Sans+Narrow:400,700&subset=latin,latin-ext,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>

  </head>
  <body>
    <header class="<?php if(isset($homepage)) { echo "homepage"; } ?>">
      <div class="wrapper">

      <h1 class="header-logo-left"><a href="<?php echo(URL); ?>/<?php echo($lang); ?>">Apartment Galeon</a></h1>

      </div>
    </header>

    <div class="line"></div>

    <section class="text">
      <div class="menu-wrapper">

        <nav class="main-menu">
          <ul>
            <li><a href="<?php echo URL; ?>" class="<?php if($menu === "index") { echo "selected"; } ?>">úvod</a></li>
            <li><a href="<?php echo URL; ?>/location" class="<?php if($menu === "location") { echo "selected"; } ?>">lokalita</a></li>
            <li><a href="<?php echo URL; ?>/apartment" class="<?php if($menu === "apartment") { echo "selected"; } ?>">apartmán</a></li>
            <li><a href="<?php echo URL; ?>/rent" class="<?php if($menu === "rent") { echo "selected"; } ?>">pronájem</a></li>
            <li><a href="<?php echo URL; ?>/contact" class="<?php if($menu === "contact") { echo "selected"; } ?>">kontakt</a></li>
          </ul>
        </nav>

      </div>
    </section>
<!DOCTYPE html>
<head>
  <?php wp_head() ?>
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous">
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <meta charset="UTF-8">
</head>

<body>
    <!-- DEBUT DU HEADER -->
    <div class="container_all_website playremovemargin">
     <nav class="navmenu">
        <button class="btn-logo">
          <img src="<?php echo get_template_directory_uri();  ?>/assets/img/newspaper.png" width="30" height="30" title="act"/>
          <!--<input type="checkbox" class="check"> -->
        </button>
        
      <!--  <div class="slide-container">
          <div id="mySidenav" class="sidenav">

          </div>
        </div> -->

        <div class="nav-logo">
          <img class="paylose-logo" src="<?= get_theme_mod('logo'); ?>" alt="logo"/>
        </div>
        <?php
        wp_nav_menu([
          'theme_location' => 'header',
          'container' => '',
          'menu_class' => 'nav-link',
          
        ]);
        ?>

        <div class="nav_rs-link">
         <?php dynamic_sidebar('blog') ?>

        </div>
    
        <?=  get_search_form(); ?>


        <!-- rework -->
        <div class="media_button_menu">
          <!-- <a href="#">
            <img src="img/btn30x30.png"/>
           </a> -->
          <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
          <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span> 
          </label>

          <div class="navigation__background">&nbsp;</div>
          <nav class="navigation__nav">
            <?php
            wp_nav_menu([
            'theme_location' => 'header',
            'container' => false,
            'menu_class' => 'navigation__list'
          ]);
        ?>
          </nav>
          
         </div>
      </nav> 
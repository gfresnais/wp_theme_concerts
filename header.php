<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <?php wp_head(); ?>
  </head>
  <body>
  <div class="container">
    <header class="row">
      <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">Accueil</a>
      <?php
      $defaults = [
        'theme_location'    => 'main_menu',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
      ];

      wp_nav_menu($defaults);

      /*$defaults_mobile = [
        'theme_location' => 'mobile',
        'container' => 'nav',
        'container_class'=>'col-12'
      ];

      wp_nav_menu($defaults_mobile);*/
      ?>
    </header>

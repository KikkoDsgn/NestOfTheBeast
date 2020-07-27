<!DOCTYPE html>
<html>
  <head>
    <meta>
    <title></title>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class('test'); ?>>



  <header>
    <div class="container">

        <div class="row">

           <div class="col d-flex align-items-center justify-content-between">

            <a href="<?php bloginfo('url') ?>">
             <img src="<?php bloginfo('template_directory'); ?>/images/logoneast.png" class="img-fluid logo">
            </a>
                 <?php
                 wp_nav_menu(

                   array(

                     'theme_location' => 'top-menu',
                     'menu_class' => 'top-menu'

                   )
             ); ?>
           </div>

        </div>

    </div>

  </header>

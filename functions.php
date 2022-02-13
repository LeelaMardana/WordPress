<?php

// Подключение Логотипа

if (!function_exists('warcraft_setup')) {
  function warcraft_setup(){
    //  Добавляем пользовательский логотип
    add_theme_support( 'custom-logo', [
      'height'      => 55,
      'width'       => 130,
      'flex-width'  => false,
      'flex-height' => false,
      'header-text' => '',
      'unlink-homepage-logo' => false, // WP 5.5
    ] );
    // Добавляем динамический <title>
    add_theme_support('title-tag');
  }
  add_action( 'after_setup_theme', 'warcraft_setup' );
}


/*
Подключение стилей и скриптов
*/

add_action('wp_enqueue_scripts', 'warcraft_scripts');

function warcraft_scripts()
{
  wp_enqueue_style('main', get_stylesheet_uri());
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/plugins/bootstrap/css/bootstrap.css', array('main'), null);
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/plugins/fontawesome/css/all.css', array('main'), null);
  wp_enqueue_style('animate', get_template_directory_uri() . '/plugins/animate-css/animate.css', array('main'), null);
  wp_enqueue_style('icofont', get_template_directory_uri() . '/plugins/icofont/icofont.css', array('main'), null);
  wp_enqueue_style('warcraft', get_template_directory_uri() . '/css/style.css', array('icofont'), null);


  // Подключаем jQuery
  // wp_enqueue_script('jquery');

  //Переподключаем jQuery
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/plugins/jquery/jquery.min.js');
  wp_enqueue_script('jquery',);

  wp_enqueue_script('popper', get_template_directory_uri() . '/plugins/bootstrap/js/popper.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('wow', get_template_directory_uri() . '/plugins/counterup/wow.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('easing', get_template_directory_uri() . '/plugins/counterup/jquery.easing.1.3.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('waypoints', get_template_directory_uri() . '/plugins/counterup/jquery.waypoints.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('counterup', get_template_directory_uri() . '/plugins/counterup/jquery.counterup.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('google-map', get_template_directory_uri() . '/plugins/google-map/gmap3.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('contact', get_template_directory_uri() . '/plugins/jquery/contact.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true);
}
<?php
/*
Plugin Name: Slug to Languages
Version: 1.0.0
Author: Daniel Nakamashi
Description: Plugin developed specifically to achieve Popcorn site's url needs
*/

function pc_slug_to_languages_func()
{
    global $pc_slug_to_languages;
    $pc_slug_to_languages = array(
        '/^\/diretores/' => 'pt',
        '/^\/directors/' => 'en',
    );
}
add_action( 'plugins_loaded', 'pc_slug_to_languages_func', 0 );
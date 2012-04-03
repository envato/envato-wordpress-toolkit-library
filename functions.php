<?php
// register an action (can be any suitable action)
add_action('admin_init', 'on_admin_init');

function on_admin_init()
{
    // include the library
    include_once('envato-wordpress-toolkit-library/class-envato-wordpress-theme-upgrader.php');
    
    $upgrader = new Envato_WordPress_Theme_Upgrader( 'denonstudio', 'xxxxxxxav7hny3p1ptm7xxxxxxxx' );
    
    /*
     *  Uncomment to check if the current theme has been updated
     */
    
    // $upgrader->check_for_theme_update(); 

    /*
     *  Uncomment to updated the current theme
     */
    
    // $upgrader->upgrade_theme();
}

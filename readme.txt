=== Envato Wordpress Toolkit Library ===
Contributors: Arman Mirkazemi, Derek Herman, Japh Thomson
Tags: update, envato, theme, api, toolkit
Requires at least: 3.0
Tested up to: 3.3.1
Stable tag: 1.2

WordPress Toolkit Library for Envato Marketplace hosted items.

== Description ==

This is an example theme to demonstrate usage of the Envato WordPress Toolkit Library. This library is intended for ThemeForest authors to integrate with their WordPress themes, providing automatic update functionality.

Currently this library provides the following functionalities:

* Checks for theme updates on the ThemeForest marketplace
* Upgrades the theme to its latest version

See Installation notes for further instructions.

== Installation ==

1. Copy the `envato-wordpress-toolkit-library` folder into your theme folder
2. View the contents of the `functions.php` for usage examples
3. Customise the code in your theme to accept the user's ThemeForest Username and Secret API Key
4. Instantiate the `Envato_WordPress_Theme_Upgrader` class and call its `check_for_theme_update` and `upgrade_theme` methods at appropriate times. If you want to disable caching be sure to set $allow_cache parameter to false
5. Your theme should now be able to check for updates and update itself!

== Changelog ==

= 1.2 =
* Changed use of cURL to the WordPress HTTP API
* Removed ini_set usage

= 1.1 =
* Imported Derek's changes to the API class to support caching of API results

= 1.0 =
* Initial release.

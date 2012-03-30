=== Envato WordPress Theme Upgrader ===
Contributors: Arman Mirkazemi
Tags: update, envato, theme, api
Requires at least: 3.0
Tested up to: 3.3.1
Stable tag: 1.0

Envato WordPress Theme Upgrade utility for Envato Marketplace hosted themes.

== Description ==

This is an example theme to demonstrate usage of the Envato WordPress Theme Upgrader Library. This library is intended for ThemeForest authors to integrate with their WordPress themes, providing automatic update functionality.

The upgrader has the following methods available:

`check_for_theme_update`
* Checks for theme updates on the ThemeForest marketplace

`upgrade_theme`
* Upgrades the theme to its latest version

See Installation notes for further instructions.

== Installation ==

1. Copy the `envato-wordpress-theme-upgrader` folder into your theme folder
2. View the contents of the `functions.php` for usage examples
3. Customise the code in your theme to accept the user's ThemeForest Username and Secret API Key
4. Instantiate the `Envato_WordPress_Theme_Upgrader` class and call its `check_for_theme_update` and `upgrade_theme` methods at appropriate times
5. Your theme should now be able to check for updates and update itself!

== Changelog ==

= 1.0 =
* Initial release.

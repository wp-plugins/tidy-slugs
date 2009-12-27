=== Plugin Name ===
Contributors: artesea
Donate link: http://blog.artesea.co.uk/donate
Tags: slug, admin, seo
Requires at least: 2.6
Tested up to: 2.9
Stable tag: 1.0

Removes random characters like ’ which get converted to %e2%80%99 

== Description ==

Removes random characters like ’ which get converted to %e2%80%99 

== Installation ==

Recommend you use the built in plugin uploader which comes with WordPress, but if you prefer the manual way

1. Upload `tidy-slugs.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Does this plugin uses loads of resources =

Nope, this is just a quick hook which runs six php standard commands on your post title before passing it to the built in slug maker.

== Changelog ==

= 1.0 =
* Dec 2009 - Released via the WP plugins directory.

= 0.1 =
* Nov 2007 - First designed for my own personal blog.
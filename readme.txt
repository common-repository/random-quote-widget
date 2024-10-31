=== Plugin Name ===
Contributors: uppfinnarn
Donate link: http://macaronicode.se/
Tags: random, quote, widget
Requires at least: 2.0.2
Tested up to: 2.9.2
Stable tag: 1.0

A Widget for displaying a quote from the Quote Database of an existing installation of Online Random Quote(https://sourceforge.net/projects/randomquote/)

== Description ==

This Widget loads a Database from an existing installation of [Online Random Quote](https://sourceforge.net/projects/randomquote/) and displays a random quote from it at every page load. Database can be located anywhere, but must be on the same server as the Wordpress Installation.

== Installation ==

1. Upload `rq-widget` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Set up using the Widget control panel

== Frequently Asked Questions ==

= Can I Place my Random Quote installation outside of my Wordpress directory? =

Yes, just specify the path accordingly in the Widget Setup menu

= What version of Random Quote is required for this widget? =

This Widget uses the Compatibility Hooks added in Version 1.3.1, so any version later than that will work

= Do I need to edit my Random Quote installation/my Theme/Anything else? =

Nope, this is a Widget, which means you can use it in most themes without fiddling around with the Templates. You don't need to edit your Random Quote installation either, as the Widget will hook into an existing installation.

= I don't want to install the full version of Random Quote, can't I just pick out the files I need for this widget? =

Yes, you can. If you only want to use the Widget, you can delete all but the following files:
* quote.php
* data/style.css
* data/functions.php
* database/db.xml
* database/config.php

But since the entire installation isn't so big, wouldn't it be easier to keep the whole thing? But it's not my site, so I don't know. Maybe you have some good reason for it.

== Changelog ==

= 1.0 =
* Initial Release
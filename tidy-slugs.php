<?php
/*
Plugin Name: Tidy Slugs
Plugin URI: http://blog.artesea.co.uk/2007/11/tidy-slugs.html
Description: Removes random characters like ’ which get converted to %e2%80%99
Version: 1.0
Author: Ryan Cullen
Author URI: http://blog.artesea.co.uk/
*/

/*

Licensed under the terms of the GPL version 2, see:
http://www.gnu.org/licenses/gpl.txt

Based on SEO Slugs by Andrei Mikrukov (http://www.vretoolbar.com).
and Cyrillic Slugs by Petko Bossakov (http://petko.bossakov.eu/wordpress-cyrillic-slugs-plugin)
and Drifity in PHP by Adam Kalsey (http://kalsey.com/2004/07/dirify_in_php/)
*/

function tidy_slugs($slug) {
	if($slug) return $slug;
	global $wpdb;
	$tidy_slug = stripslashes($_POST['post_title']);           ## removes slashes
	$tidy_slug = strtolower($tidy_slug);                       ## lower-case.
	$tidy_slug = strip_tags($tidy_slug);                       ## remove HTML tags.
	$tidy_slug = preg_replace('!&[^;\s]+;!', '', $tidy_slug);  ## remove HTML entities.
	$tidy_slug = preg_replace('![^\w\s]!', '', $tidy_slug);    ## remove non-word/space chars.
	$tidy_slug = preg_replace('!\s+!', '-', $tidy_slug);       ## change space chars to dashes.
	return $tidy_slug;
}

add_filter('name_save_pre', 'tidy_slugs', 0);
?>
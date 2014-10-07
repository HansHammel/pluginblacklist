<?php
/**
 * @package Plugins_Blacklist
 * @version 1.0
 */
/*
Plugin Name: Plugins Blacklist
Plugin URI: http://specialsolutions.de/
Description: Checks for blacklisted plugins.
Author: Oliver Bleckmann
Version: 1.0
Author URI: http://specialsolutions.de/
Donate link: 
Tags: unused, duplicate, plugin, plugins, anti-malware, antimalware, security, plugin, scan, automatic, repair, remove, malware, virus, threat, recover, hacked, malicious, scripts, infection, timthumb, exploit, block, brute force, wp-login, patch
Stable tag: 1.0
Requires at least: 3.0
Tested up to: 4.0
*/

function get_plugin_blacklist() {
$blacklist = 
"all-in-one-cufon\n" .
"pixopoint-menu\n" .
"Read More Right Here\n" .
"user-photo\n" . //depricated calls.
"broken-links-remover\n" . //depricated calls
"developer-options-plugin\n" . //depricated calls
"font\n" . //depricated calls\n" .
"pixopoint-menu\n" . //depricated calls\n" .
"Sencha.io Src for WordPress\n" .
"Broken links Remover\n" .
"Simplest Gallery\n" .
"Developer Options\n" .
"Media File Manager Advanced\n" .
"Media Manager Plus (uses curl)\n" .
"Font\n" .
"Organize Series\n" .
"Revision Control\n" .
"PixoPoint Menu Plugin\n" .
"Simple Featured Posts Widget\n" .
"Simple Post Series with SEO!\n" .
"Simple Notices\n" .
"Simple Page Ordering\n" .
"WP UI\n" . //Tabs, accordions and more.
"Posts 2 Posts\n" .
"Page Links To\n" .
"Page List Widget\n" .
"Pages Order\n" .
"Advanced Automatic Updates\n" .
"Amazon Product In a Post Plugin\n" .
"CTA Widget\n" . //Call to Action Widget
"Leaflet Maps Marker\n" .
"My Shortcodes\n" .
"Dynamic Content Gallery\n" .
"Lightbox Gallery\n" .
"Lightbox Plus Colorbox\n" .
"Magic Action Box\n" .
"Tag or Category term_group order" .
"6scan-backup\n" .
"6scan-protection\n" . //We take care of security and patching core files.
"adminer\n" .
"async-google-analytics\n" .
"backup-scheduler\n" .
"backup\n" .
"backupwordpress\n" .
"BackupWordPress\n" . //While the plugin is not insecure, it duplicates a number of files on disk that are already in our backups.
"backwpup\n" .
"Broken Link Checker\n" . //Overwhelms with an inordinate amount of HTTP requests.
"broken-link-checker\n" .
"Contextual Related Posts\n" .
"contextual-related-posts\n" .
"duplicator\n" .
"Dynamic Related Posts\n" .
"dynamic-related-posts\n" .
"ewww-image-optimizer\n" .
"ezpz-one-click-backup\n" .
"file-commander\n" .
"Force Strong Passwords\n" . //WordPress already install & activate this plugin for you.
"Fuzzy SEO Booster\n" . //Causes MySQL issues as a site becomes more popular.
"fuzzy-seo-booster\n" .
"Google XML Sitemaps\n" . //WordPress now recommend WordPress SEO and Google Sitemap Plugin for your Google XML Sitemap needs.
"google-sitemap-generator\n" .
"google-xml-sitemaps-with-multisite-support\n" .
"hc custom wp admin url\n" .
"hcs.php\n" .
"Hello Dolly!\n" . //Sorry, Matt.
"hello-dolly\n" .
"hello.php\n" .
"hello\n" .
"jr-referrer\n" .
"Limit Login Attempts\n" . //WordPress already install & activate this plugin for you.
"LinkMan\n" . //Much like the MyReviewPlugin above, LinkMan utilizes an unscalable amount of database writes.
"missed-schedule\n" .
"MyReviewPlugin\n" . //Slams the database with a fairly significant amount of writes.
"No Revisions\n" . //WordPress disable revisions for all customers by default.
"no-revisions\n" .
"ozh-who-sees-ads\n" .
"portable-phpmyadmin\n" .
"quick-cache\n" .
"referrer-wp\n" .
"SEO Auto Links & Related Posts\n" .
"seo-alrp\n" .
"sgcachepress\n" .
"si-captcha-for-wordpress\n" .
"Similar Posts\n" .
"similar-posts\n" .
"StatPress - DB\n" .
"statpress\n" .
"super-post\n" .
"superslider\n" .
"synthesis\n" .
"text-passwords\n" .
"the-codetree-backup\n" .
"ToolsPack\n" .
"Tweet Blender\n" . //Does not play nicely with our caching layer and can cause increased server load.
"tweet-blender\n" .
"W3 Total Cache\n" .
"w3-total-cache\n" .
"wordfence\n" .
"wordpress-beta-tester\n" .
"wordpress-gzip-compression\n" . //Output compression is handled automatically.
"WP DB Backup\n" . //Though, to the author’s credit, he recommends not saving backups to the local file system.
"WP DB Manager\n" .
"WP DB Manager\n" . //Local storage is the only option here, and .htaccess protection is recommended, but disk space usage is a definite concern.
"WP File Cache\n" .
"WP Mailing List\n" .
"WP Missed Schedule\n" . //WP Engine already has automated processes that run wp-cron regularly and checks & publishes missed posts.
"WP phpMyAdmin\n" .
"WP phpMyAdmin\n" . //Disallowed due to a fairly major security issue. WordPress offer phpMyAdmin access without a plugin.
"WP PostViews - DB\n" .
"WP PostViews\n" . //Inefficiently writes to the database on every page load.
"WP Super Cache\n" .
"wp-cache\n" .
"wp-cachecom\n" .
"wp-database-optimizer\n" .
"wp-db-backup\n" .
"wp-dbmanager\n" .
"wp-engine-snapshot\n" .
"wp-fast-cache\n" .
"wp-fastest-cache\n" .
"wp-file-cache\n" .
"wp-mailinglist\n" .
"wp-missed-schedule\n" .
"wp-phpmyadmin\n" .
"wp-postviews\n" .
"wp-slimstat\n" .
"wp-super-cache\n" .
"wp-symposium-alerts\n" .
"wpengine-common\n" .
"wpengine-migrate\n" .
"wpengine-snapshot\n" .
"wponlinebackup\n" .
"Yet Another Related Posts Plugin\n" .
"yet-another-featured-posts-plugin\n" .
"yet-another-related-posts-plugin";

	// Here we split it into lines
	return explode( "\n", $blacklist );
}

// This just echoes the chosen line, we'll position it later
function plugin_blacklist() {
	
// Check if get_plugins() function exists. This is required on the front end of the
// site, since it is in a file that is normally only loaded in the admin.
if ( ! function_exists( 'get_plugins' ) ) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

$blacklist = get_plugin_blacklist();
//$all_plugins = get_plugins();

$allplugins = get_plugins();
$all_plugins = [];
foreach($allplugins as $key => $value){
//array_push($all_plugins,get_plugin_data( WP_PLUGIN_DIR . "/" . $key, $markup = false, $translate = false ));
$all_plugins[$key] = get_plugin_data( WP_PLUGIN_DIR . "/" . $key, $markup = false, $translate = false );
}


echo "<div id='pluginblacklist'>";
echo "<div class='row'>Please considre removing the following blacklisted Plugins:</div>";
//echo '<pre>'; print_r($all_plugins); echo '</pre>';
$flipped=array_flip($blacklist);
$filtred = [];
foreach($all_plugins as $key => $value){
	foreach ($flipped as $key2 => $value2) {
  	if($key2 === $key){
  		$filtred[] = $value;
  	} else
  	if($key2 === $all_plugins[$key][Name]){
  		$filtred[] = $value;
  	} else
  	if(preg_match("/$key2/",$all_plugins[$key][Name])){
    	$filtred[] = $value;
    } else
    if(preg_match("/$key2/",$key)){
    	$filtred[] = $value;
    }
  }
}
$str = "";
//$filtred=array_unique($filtred);
//echo '<pre>'; print_r($filtred); echo '</pre>';
foreach ($filtred as &$plugin) {
		$str = $str . "<div class='row'>"
    . "$plugin[Name] ($plugin[Version]) by $plugin[AuthorName]"
    /*
    echo "$plugin[Name]<br>";
    echo "$plugin[PluginURI]<br>";
    echo "$plugin[Version]<br>";
    echo "$plugin[Description]<br>";
    echo "$plugin[Author]<br>";
    echo "$plugin[AuthorURI]<br>";
    echo "$plugin[TextDomain]<br>";
    echo "$plugin[DomainPath]<br>";
    echo "$plugin[Network]<br>";
    echo "$plugin[Title]<br>";
    echo "$plugin[AuthorName]<br>";*/
    . "</div>" . "|||";
}
/*
foreach ($all_plugins as &$plugin) {
	if (in_array($plugin[Name], $blacklist)) {
		echo "<div>";
    echo "$plugin[Name]<br>";
    echo "$plugin[PluginURI]<br>";
    echo "$plugin[Version]<br>";
    echo "$plugin[Description]<br>";
    echo "$plugin[Author]<br>";
    echo "$plugin[AuthorURI]<br>";
    echo "$plugin[TextDomain]<br>";
    echo "$plugin[DomainPath]<br>";
    echo "$plugin[Network]<br>";
    echo "$plugin[Title]<br>";
    echo "$plugin[AuthorName]<br>";
    echo "</div>";
  }
}
*/
//$str = array_map("unserialize", array_unique(array_map("serialize", $str)));
echo implode('',array_unique(explode('|||', $str), SORT_REGULAR));
//echo $str;
echo "</div>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'plugin_blacklist' );

// We need some CSS to position the paragraph
function plugin_blacklist_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#pluginblacklist {
		position: absolute;
		/*float: $x;*/
		/*padding-$x: 15px;*/
		padding: 5px;		
		margin: 0;
		top: 30px;
		right: 20px;
		x-overflow: scroll;
		font-size: 11px;
		height:auto;
		width:auto;
		background: #ddd;
		z-index:2000;
	}
	</style>
	";
}

add_action( 'admin_head', 'plugin_blacklist_css' );


/*
ban

Dynamic Related Posts
•SEO Auto Links & Related Posts
•Yet Another Related Posts Plugin
•Similar Posts
•Contextual Related Posts
•contextual-related-posts
•fuzzy-seo-booster
•seo-alrp
•similar-posts
•yet-another-featured-posts-plugin
•yet-another-related-posts-plugin
Dynamic Related Posts
•SEO Auto Links & Related Posts
•Yet Another Related Posts Plugin
•Similar Posts
•Contextual Related Posts


Broken Link Checker — Overwhelms even our robust caching layer with an inordinate amount of HTTP requests.
•MyReviewPlugin — Slams the database with a fairly significant amount of writes.
•LinkMan — Much like the MyReviewPlugin above, LinkMan utilizes an unscalable amount of database writes.
•Fuzzy SEO Booster — Causes MySQL issues as a site becomes more popular.
•WP PostViews — Inefficiently writes to the database on every page load. 
•To track traffic in a more scalable manner, both the stats module in Automattic’s Jetpack plugin and Google Analytics work wonderfully.
•Tweet Blender — Does not play nicely with our caching layer and can cause increased server load.

WP DB Backup — Though, to the author’s credit, he recommends not saving backups to the local file system.
•WP DB Manager — Local storage is the only option here, and .htaccess protection is recommended, but disk space usage is a definite concern.
•BackupWordPress — While the plugin is not insecure, it duplicates a number of files on disk that are already in our backups.
•backupwordpress
•backwpup
•wponlinebackup
•6scan-backup
•the-codetree-backup
•ezpz-one-click-backup
Broken Link Checker — Overwhelms even the robust caching layer with an inordinate amount of HTTP requests.
•MyReviewPlugin — Slams the database with a fairly significant amount of writes.
•LinkMan — Much like the MyReviewPlugin above, LinkMan utilizes an unscalable amount of database writes.
•Google XML Sitemaps — WordPress now recommend WordPress SEO and Google Sitemap Plugin for your Google XML Sitemap needs.
•Fuzzy SEO Booster — Causes MySQL issues as a site becomes more popular.
•WP PostViews — Inefficiently writes to the database on every page load.
•To track traffic in a more scalable manner, both the stats module in Automattic’s Jetpack plugin and Google Analytics work wonderfully.
•Tweet Blender — Does not play nicely with our caching layer and can cause increased server load.


WP Super Cache
•WP File Cache
•W3 Total Cache
•WordFence
•w3-total-cache
•wp-cache
•wp-file-cache
•wp-super-cache
•wp-fast-cache
•wp-fastest-cache
•wp-cachecom

#useless/ Duplicate Behavior Plugins
•wpengine-common
•wp-engine-snapshot
•sgcachepress
•wordpress-beta-tester
•synthesis
•6scan-protection — We take care of security and patching core files.
•adminer
•portable-phpmyadmin
•wordpress-gzip-compression — Output compression is handled automatically.
•wp-phpmyadmin
•wpengine-common
•wp-engine-snapshot
•sgcachepress
•synthesis
•wordpress-beta-tester
No Revisions — WordPress disable revisions for all customers by default.
•WP Missed Schedule — WP Engine already has automated processes that run wp-cron regularly and checks & publishes missed posts.
•Limit Login Attempts — WordPress already install & activate this plugin for you.
•Force Strong Passwords — WordPress already install & activate this plugin for you.

WP Mailing List

Hello Dolly! — Sorry, Matt.
•WP phpMyAdmin — Disallowed due to a fairly major security issue. WordPress offer phpMyAdmin access without a plugin.


StatPress - DB
•jr-referrer
•referrer-wp
•statpress
•wp-postviews
•wp-slimstat


WP PostViews - DB
WP DB Manager, WP phpMyAdmin 

adminer
async-google-analytics
backup
backup-scheduler
backupwordpress
backwpup
broken-link-checker
contextual-related-posts
duplicator
dynamic-related-posts
ewww-image-optimizer
ezpz-one-click-backup
file-commander
fuzzy-seo-booster
google-sitemap-generator
google-xml-sitemaps-with-multisite-support
hc custom wp admin url
hcs.php
hello.php
jr-referrer
missed-schedule
no-revisions
ozh-who-sees-ads
portable-phpmyadmin
quick-cache
seo-alrp
si-captcha-for-wordpress
similar-posts
super-post
superslider
text-passwords
the-codetree-backup
toolspack
ToolsPack
tweet-blender
w3-total-cache
wordfence
wordpress-gzip-compression
wp-cache
wp-database-optimizer
wp-db-backup
wp-dbmanager
wp-engine-snapshot
wp-file-cache
wp-mailinglist
wp-missed-schedule
wp-phpmyadmin
wp-postviews
wp-slimstat
wp-super-cache
wp-symposium-alerts
wpengine-migrate
wpengine-snapshot
wponlinebackup
yet-another-featured-posts-plugin
yet-another-related-posts-plugin
6scan-backup
6scan-protection
adminer
backupwordpress
backwpup
broken-link-checker
contextual-related-posts
ezpz-one-click-backup
fuzzy-seo-booster
google-sitemap-generator
google-xml-sitemaps-with-multisite-support
hello
hello-dolly
hello.php
jr-referrer
portable-phpmyadmin
quick-cache
seo-alrp
sgcachepress
similar-posts
statpress
synthesis
the-codetree-backup
toolspack
w3-total-cache
wordpress-gzip-compression
wp-cache
wp-db-backup
wp-dbmanager
wp-engine-snapshot
wp-file-cache
wp-phpmyadmin
wp-postviews
wp-slimstat
wp-super-cache
wpengine-common
wponlinebackup
yet-another-featured-posts-plugin
yet-another-related-posts-plugin
adminer
async-google-analytics
backup
backup-scheduler
backupwordpress
backwpup
broken-link-checker
contextual-related-posts
dynamic-related-posts
ewww-image-optimizer
ezpz-one-click-backup
file-commander
fuzzy-seo-booster
google-sitemap-generator
google-xml-sitemaps-with-multisite-support
hcs.php
hello.php
jr-referrer
missed-schedule
no-revisions
ozh-who-sees-ads
portable-phpmyadmin
quick-cache
seo-alrp
similar-posts
super-post
superslider
text-passwords
the-codetree-backup
toolspack
tweet-blender
w3-total-cache
wordpress-gzip-compression
wp-cache
wp-database-optimizer
wp-db-backup
wp-dbmanager
wp-engine-snapshot
wp-file-cache
wp-mailinglist
wp-missed-schedule
wp-phpmyadmin
wp-postviews
wp-slimstat
wp-super-cache
wp-symposium-alerts
wpengine-migrate
wpengine-snapshot
wponlinebackup
yet-another-featured-posts-plugin
yet-another-related-posts-plugin

#own bad perf. incomp. dep.calls
all-in-one-cufon
pixopoint-menu
Read More Right Here
user-photo - depricated calls
broken-links-remover - depricated calls
developer-options-plugin - depricated calls
font - depricated calls
pixopoint-menu - depricated calls
Sencha.io Src for WordPress
Broken links Remover
Simplest Gallery
Developer Options
Media File Manager Advanced
Media Manager Plus (uses curl)
Font
Organize Series
Revision Control
PixoPoint Menu Plugin
Simple Featured Posts Widget
Simple Post Series with SEO!
Simple Notices
Simple Page Ordering
WP UI - Tabs, accordions and more.
Posts 2 Posts
Page Links To
Page List Widget
Pages Order
Advanced Automatic Updates
Amazon Product In a Post Plugin
CTA Widget - Call to Action Widget
Leaflet Maps Marker
My Shortcodes
Dynamic Content Gallery
Lightbox Gallery
Lightbox Plus Colorbox
Magic Action Box
Tag or Category term_group order


WP Super Cache
WP File Cache
WP Rocket
W3 Total Cache
WordFence

Uploadify 

Fuzzy SEO Booster 
LinkMan
MyReviewPlugin
Tweet Blender

Updater

Dynamic Related Posts
SEO Auto Links & Related Posts
Yet Another Related Posts Plugin
Similar Posts
Contextual Related Posts

No Revisions
WP Missed Schedule 
Limit Login Attempts 
Force Strong Passwords 
WordFence 
*/

?>
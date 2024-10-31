<?php
/*
Plugin Name: Random Quote Widget
Plugin URI: http://sourceforge.net/projects/randomquote/
Description: Displays a random quote from an installation of <a href="http://sourceforge.net/projects/randomquote/">Online Random Quote</a>. Requires Random Quote version 1.3.1 or later installed.
Author: MacaroniCode
Version: 1.0
Author URI: http://macaronicode.se/
*/

define("RQ_PREFIX", ABSPATH.get_option("rqw_path", "../quote/"));

function rqw_widget($args)
{
	extract($args);
	print $before_widget;
	print $before_title;
	print get_option("rqw_title", "Random Quote");
	print $after_title;
	if(file_exists(RQ_PREFIX."quote.php"))
		require RQ_PREFIX."quote.php";
	else
	{
		print "Random Quote Widget requires a working &quot;quote.php&quot; in a location given in the Widgets Control Panel. If you have set that option, please check the given path.";
	}
	print $after_widget;
}

function rqw_init()
{
	register_sidebar_widget(__('Random Quote Widget'), 'rqw_widget');
	register_widget_control(__('Random Quote Widget'), 'rqw_control');
}

function rqw_head()
{
	print "<style type=\"text/css\">\n";
	if(file_exists(RQ_PREFIX."/data/style.css")) require RQ_PREFIX."/data/style.css";
	print "\n.qtextol{margin-bottom:0;}";
	print "\n</style>\n\n";
}

function rqw_control()
{
	$title = get_option("rqw_title", "Random Quote");
	$path = get_option("rqw_path", "../quote/");
	
	if($_POST['RQW-Submit'])
	{
		$title = htmlspecialchars($_POST['RQW-WidgetTitle']);
		$path = $_POST['RQW-Path'];
		update_option("rqw_title", $title);
		update_option("rqw_path", $path);
	}
	
	?>
	<p>
		<label for="RQW-WidgetTitle">Title: </label><br />
		<input type="text" id="RQW-WidgetTitle" name="RQW-WidgetTitle" value="<?php print $title; ?>" />
	</p>
	<p>
		<label for="RQW-Path">Path to RQ Installation relative to WordPress Base Directory:<br />
		<small style="margin-left:10px;">&nbsp;&quot;..&quot; = up a directory</small></label><br />
		<small style="margin-left:10px;">PATH MUST END WITH &quot;/&quot;</small></label><br />
		<input type="text" id="RQW-Path" name="RQW-Path" value="<?php print $path; ?>" />
	</p>
	<input type="hidden" name="RQW-Submit" value="1" />
	<?php
}

add_action("plugins_loaded", "rqw_init");
add_action('wp_head', 'rqw_head');
?>
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
	<link rel="stylesheet" type="text/css" href="ddtabmenufiles/glowtabs.css" />
<link rel="stylesheet" type="text/css" href="css/flexnav.css" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<script type="text/javascript" src="ddtabmenufiles/ddtabmenu.js"> </script>

</head>

<body bgcolor="#FFFFFF">
	
		<div id="header_main">
        <img src="images/logo.jpg" align="right" style="padding-right: 20px" height="100px" width="120px" alt="logo" />
        </div> 	
<div id="header">
	<!-- end #header -->
	<div id="menuTop">
		<ul>

			<li><a href="?page_id=5" title="Home">Home</a></li>
			<li><a href="?page_id=7" title="Aim of the Experiment">Aim of the Experiment</a></li>
			<li><a href="?page_id=9" title="Theory">Theory</a></li>
			<li><a href="?page_id=11" title="Equipment">Equipment</a></li>
			<li><a href="?page_id=13" title="Experiments">Experiments</a></li>
			<li><a href="?page_id=15" title="Simulation">Simulation</a></li>
			<li><a href="?page_id=17" title="FAQ">FAQ</a></li>
			<li><a href="?page_id=19" title="Feedback">Feedback</a></li>
			<li><a href="?page_id=21" title="Contact Us">Contact Us</a></li>


			
		</ul>
	</div>
	</div>	

<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

  <style type="text/css">.search-box-wrapper,button,input{-webkit-box-sizing:border-box;-moz-box-sizing:border-box}#secondary,.hentry:after,.search-box:after,[class*=content]:after,[class*=site]:after,h1,h2{clear:both}a,abbr,blockquote,body,div,form,h1,h2,html,label,li,p,span,ul{border:0;font-family:inherit;font-size:100%;font-style:inherit;font-weight:inherit;margin:0;outline:0;padding:0;vertical-align:baseline}blockquote,p{margin-bottom:24px}article,aside,footer,header,nav{display:block}.hide,.search-submit{display:none}html{overflow-y:scroll;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body,button,input{color:#2b2b2b;font-family:Lato,sans-serif;font-size:16px;font-weight:400;line-height:1.5}body{background:#f5f5f5}a{color:#24890d;text-decoration:none}h1,h2{font-weight:700;margin:36px 0 12px}h1{font-size:26px;line-height:1.3846153846}h2{font-size:24px;line-height:1}abbr[title]{border-bottom:1px dotted #2b2b2b}blockquote{-webkit-hyphens:none;-moz-hyphens:none;-ms-hyphens:none;hyphens:none;quotes:none;color:#767676;font-size:19px;font-style:italic;font-weight:300;line-height:1.2631578947}blockquote:after,blockquote:before{content:"";content:none}ul{margin:0 0 24px 20px;list-style:disc}button,input{box-sizing:border-box;font-size:100%;margin:0;max-width:100%;vertical-align:baseline;line-height:normal}input[type=search]{-webkit-appearance:textfield}input[type=search]::-webkit-search-decoration{-webkit-appearance:none}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{background-image:-webkit-linear-gradient(hsla(0,0%,100%,0),hsla(0,0%,100%,0));border:1px solid rgba(0,0,0,.1);border-radius:2px;color:#2b2b2b;padding:8px 10px 7px}button,input[type=submit]{-webkit-appearance:button;background-color:#24890d;border:0;border-radius:2px;color:#fff;font-size:12px;font-weight:700;padding:10px 30px 11px;text-transform:uppercase;vertical-align:bottom}.search-field{width:100%}::-webkit-input-placeholder{color:#939393}:-moz-placeholder{color:#939393}::-moz-placeholder{color:#939393;opacity:1}:-ms-input-placeholder{color:#939393}.screen-reader-text{clip:rect(1px,1px,1px,1px);overflow:hidden;position:absolute!important;height:1px;width:1px}.site,.site-header{max-width:1260px;position:relative}.menu-toggle,.search-toggle{height:48px;text-align:center}.hentry:after,.hentry:before,.search-box:after,.search-box:before,[class*=content]:after,[class*=content]:before,[class*=site]:after,[class*=site]:before{content:"";display:table}.menu-toggle:before,.search-toggle:before{-webkit-font-smoothing:antialiased;display:inline-block;font:400 16px/1 Genericons;text-decoration:inherit;vertical-align:text-bottom}.site{background-color:#fff}.main-content{width:100%}.site-header{background-color:#000;width:100%;z-index:4}.header-main{min-height:48px;padding:0 10px}.site-title{float:left;font-size:18px;font-weight:700;line-height:48px;margin:0;max-width:-webkit-calc(100% - 86px);max-width:calc(100% - 86px)}.site-title a{color:#fff;display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.search-toggle{background-color:#24890d;float:right;margin-right:38px;width:48px}.search-toggle:before{color:#fff;content:"\f400";font-size:20px;margin-top:14px}.search-toggle .screen-reader-text{left:5px}.search-box-wrapper{box-sizing:border-box;position:absolute;top:48px;right:0;width:100%;z-index:2}.search-box{background-color:#41a62a;padding:12px}.search-box .search-field{background-color:#fff;border:0;float:right;font-size:16px;padding:2px 2px 3px 6px;width:100%}#secondary,.primary-navigation .nav-menu{border-bottom:1px solid rgba(255,255,255,.2)}.site-navigation ul{list-style:none;margin:0}.site-navigation li{border-top:1px solid rgba(255,255,255,.2)}.site-navigation a{color:#fff;display:block;text-transform:uppercase}.site-navigation .current_page_item>a{color:#55d737;font-weight:900}.primary-navigation{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;font-size:14px;padding-top:24px}.primary-navigation .nav-menu{display:none}.primary-navigation a{padding:7px 0}.menu-toggle{background-color:#000;border-radius:0;margin:0;overflow:hidden;padding:0;position:absolute;top:0;right:0;width:48px}.menu-toggle:before{color:#fff;content:"\f419";padding:16px}.content-area{padding-top:48px}.hentry{margin:0 auto 48px;max-width:672px}.site-content .entry-content,.site-content .entry-header{margin:0 auto;max-width:474px}.entry-header{position:relative;z-index:1}.entry-title{font-size:33px;font-weight:300;line-height:1.0909090909;margin:0 0 12px;text-transform:uppercase}.site-content .entry-header{background-color:#fff;padding:0 10px 12px}.entry-content{-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto;word-wrap:break-word}.site-content .entry-content{background-color:#fff;padding:12px 10px 0}.page .entry-content{padding-top:0}.entry-content a{text-decoration:underline}.full-width .hentry{max-width:100%}#secondary{background-color:#000;border-top:1px solid #000;color:rgba(255,255,255,.7);margin-top:-1px;padding:0 10px;position:relative;z-index:2}.widget a,.widget-title{color:#fff}.site-description{display:none;font-size:12px;font-weight:400;line-height:1.5}.primary-sidebar{padding-top:48px}.widget{font-size:14px;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto;line-height:1.2857142857;margin-bottom:48px;width:100%;word-wrap:break-word}.widget h1{margin:24px 0 12px;font-size:22px;line-height:1.0909090909}.widget abbr[title]{border-color:rgba(255,255,255,.7)}.widget ul{list-style:none;margin:0}.widget-area .widget input{background-color:rgba(255,255,255,.1);border-color:rgba(255,255,255,.2);color:#fff;font-size:16px;padding:1px 2px 2px 4px}.widget input[type=submit]{background-color:#24890d;border:0;font-size:12px;padding:5px 15px 4px}.widget .widget-title{font-size:14px;font-weight:700;line-height:1.7142857142;margin:0 0 24px;text-transform:uppercase}.widget_categories li,.widget_meta li{border-top:1px solid rgba(255,255,255,.2);padding:8px 0 9px}.widget_categories li:first-child,.widget_meta li:first-child{border-top:0}.site-footer,.site-info,.site-info a{color:rgba(255,255,255,.7)}.site-footer{background-color:#000;font-size:12px;position:relative;z-index:3}.site-info{padding:15px 10px}@-ms-viewport{width:device-width}@viewport{width:device-width}@media screen and (min-width:594px){.site-content .entry-header{padding-right:30px;padding-left:30px}}@media screen and (min-width:673px){.header-main{padding:0 30px}.search-toggle{margin-right:18px}.search-box .search-field{width:50%}.content-area{float:left;width:100%}.site-content{margin-right:33.33333333%}.site-content .entry-content{padding-right:30px;padding-left:30px}.full-width .site-content{margin-right:0}#secondary{padding:0 30px}.site-info{padding:15px 30px}}@media screen and (min-width:783px){.site-title{max-width:-webkit-calc(100% - 48px);max-width:calc(100% - 48px)}.header-main{padding-right:0}.search-toggle{margin-right:0}.masthead-fixed .site-header{position:fixed;top:0}.masthead-fixed .site-main{margin-top:48px}.primary-navigation{float:right;font-size:11px;margin:0 1px 0 -12px;padding:0;text-transform:uppercase}.primary-navigation .menu-toggle{display:none;padding:0}.primary-navigation .nav-menu{border-bottom:0;display:block}.primary-navigation li{border:0;display:inline-block;height:48px;line-height:48px;position:relative}.primary-navigation a{display:inline-block;padding:0 12px;white-space:nowrap}}@media screen and (min-width:846px){.content-area{padding-top:72px}}@media screen and (min-width:1008px){#secondary,.main-content{float:left}.search-box-wrapper{padding-left:182px}.site-content{margin-right:29.04761904%;margin-left:182px}.site-content .entry-header{margin-top:0}.site:before{background-color:#000;content:"";display:block;height:100%;min-height:100%;position:absolute;top:0;left:0;width:182px;z-index:2}#secondary{background-color:transparent;border:0;clear:none;margin:0 0 0 -100%;min-height:100vh;width:122px}.primary-sidebar{padding-top:0}.site-description{display:block;margin:0 0 18px}.primary-sidebar .widget{font-size:12px;line-height:1.5}.primary-sidebar .widget h1{font-size:20px;line-height:1.2}.primary-sidebar .widget input{font-size:12px;padding:3px 2px 4px 4px}.primary-sidebar .widget input[type=submit]{padding:5px 15px 4px}.primary-sidebar .widget .widget-title{font-size:11px;font-weight:900;line-height:1.6363636363;margin-bottom:18px}.primary-sidebar .widget_categories li,.primary-sidebar .widget_meta li{border-top:0;padding:0 0 6px}.primary-sidebar .widget_categories li:last-child,.primary-sidebar .widget_meta li:last-child{padding:0}}@media screen and (min-width:1040px){.site-content .entry-content,.site-content .entry-header{padding-right:15px;padding-left:15px}.full-width .site-content .entry-content,.full-width .site-content .entry-header{padding-right:30px;padding-left:30px}}@media screen and (min-width:1080px){.search-box .search-field{width:324px}.site-content{margin-left:222px}.site:before{width:222px}.search-box-wrapper{padding-left:222px}#secondary{width:162px}}@media screen and (min-width:1110px){.site-content .entry-content,.site-content .entry-header{padding-right:30px;padding-left:30px}}@media screen and (min-width:1218px){.site-content .entry-content,.site-content .entry-header{margin-right:54px}.full-width .site-content .entry-content,.full-width .site-content .entry-header{margin-right:auto}}</style>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">

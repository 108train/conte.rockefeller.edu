
<!DOCTYPE html>
<!--[if IE 7]> <html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]> <html class="ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if !(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
	<head prefix="og: http://ogp.me/ns/website#">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<title><?php
			if(is_front_page()) {
				echo bloginfo('name');
				echo ' | ';
				echo bloginfo('description');
			} else if( is_single() ) {
				echo get_the_title();
				if(in_category('marketing') ) {
					echo ' | Marketing | ';
				} else if(in_category('design') ) {
					echo ' | Design | ';
				} else if(in_category('engineering') ) {
					echo ' | Engineering | ';
				} else if(in_category('about') ) {
					echo ' | About | ';
				}
				echo bloginfo('name'); 
			}
		?></title>
		<meta name="robots" content="noindex,nofollow">
		<meta name="description" content="<?
			if( get_post_meta($post->ID, 'meta-description', true) != null ) {
				echo get_post_meta($post->ID, 'meta-description', true);
			} else {
				echo $GLOBALS['metaDescription'];
			}
		?>">
		<link rel="apple-touch-icon" href="/wp-content/themes/conte-center/img/icon.png">
		<link rel="shortcut icon" href="/wp-content/themes/conte-center/img/assets/favicon.png">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Vollkorn|Lato:100,300,400,900|Open+Sans:300,400,600,700|Open+Sans+Condensed:300,700">
		<link rel="stylesheet" href="/wp-content/themes/conte-center/css/bootstrap-3.1.1.min.css">
		<link rel="stylesheet" href="/wp-content/themes/conte-center/css/flexslider-2.2.0.css">
		<link rel="stylesheet" href="/wp-content/themes/conte-center/style.css">
<!--[if lt IE 9]>
		<script src="/wp-content/themes/conte-center/js/html5shiv-3.7.0.js"></script>
		<script src="/wp-content/themes/conte-center/js/respond-1.4.2.min.js"></script>
<![endif]-->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');


			ga('create', '', '');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
	</head>


	<body class="" ng-app="pkApp">

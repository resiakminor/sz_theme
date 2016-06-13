<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="author" content="resiakminor">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1, minimum-scale=1">
    		
<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="">
	<meta name="twitter:title" content="Sara Zielinski">
	<meta name="twitter:description" content="Artiste Extraordinaire">
	<meta name="twitter:creator" content="">
		
<!-- Twitter Summary card images must be at least 120x120px -->
	<meta name="twitter:image" content="">

<!-- Open Graph data -->
	<meta property="og:title" content="Sara Zielinski">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://sarazielinski.com">
	<meta property="og:image" content="">
	<meta property="og:description" content="Artiste Extraordinaire"> 
	<meta property="og:site_name" content="Sara Zielinski">
    
<!--=== LINK TAGS ===-->
	<link rel="icon" href="<?php echo THEME_DIR; ?>/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/images/favicon.ico" type="image/x-icon">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 
    <!--=== TITLE ===-->  
    <title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>
     
    <!--=== WP_HEAD() ===-->
    <?php wp_head(); ?>
      
</head>
<body class="home-back">
		<div class="container trans-back">
      		<div class="row">
        		<div class="col-md-4">
		    		<a href="<?php echo get_option('home'); ?>">
						<img src="<?php echo get_bloginfo('template_directory');?>/images/szlogo.png" class="logo" alt="Sara Zielinski Logo">
					</a>
					<nav>
      					<ul class="list-style">
        					<a href="<?php bloginfo('url'); ?>/paintings/">
        						<li class="nav-style">
        							<img src="<?php echo get_bloginfo('template_directory');?>/images/nav-paintings.png" class="nav-el" alt="Paintings">
        						</li>
							</a>
        					<a href="<?php bloginfo('url'); ?>/prints/">
	        					<li class="nav-style">
	        						<img src="<?php echo get_bloginfo('template_directory');?>/images/nav-prints.png" class="nav-el" alt="Prints">
	        					</li>
    						</a>
    						<a href="<?php bloginfo('url'); ?>/drawings/">
	        					<li class="nav-style">
	        						<img src="<?php echo get_bloginfo('template_directory');?>/images/nav-drawings.png" class="nav-el" alt="Drawings">
	        					</li>
	        				</a>
        					<a href="<?php bloginfo('url'); ?>/postcards/">
	        					<li class="nav-style">
	        						<img src="<?php echo get_bloginfo('template_directory');?>/images/nav-postcards.png" class="nav-el" alt="Postcards">
	        					</li>
	        				</a>
							<a href="<?php bloginfo('url'); ?>/installations/">
	        					<li class="nav-style">
	        						<img src="<?php echo get_bloginfo('template_directory');?>/images/nav-installation.png" class="nav-el" alt="Installation">
	        					</li>
	        				</a>
	        				<a href="<?php bloginfo('url'); ?>/collage3d/">
	        					<li class="nav-style">
	        						<img src="<?php echo get_bloginfo('template_directory');?>/images/nav-collage3d.png" class="nav-el" alt="Collage+3D">
	        					</li>
	        				</a>
	        				<a href="<?php bloginfo('url'); ?>/about/">
	        					<li class="nav-style">
	        						<img src="<?php echo get_bloginfo('template_directory');?>/images/nav-about.png" class="nav-el" alt="About">
	        					</li>
	        				</a>
	        				<a href="mailto:sfzfran@gmail.com?Subject=Hello%20There" target="_top">
	        					<li class="nav-style">
	        						<img src="<?php echo get_bloginfo('template_directory');?>/images/nav-contact.png" class="nav-el" alt="Contact">
	        					</li>
	        				</a>
						</ul>
					</nav>
        		</div>
      			<div class="col-md-7">
      				<div class="entry-content">
      					<p>This page doesn't exist yo!</p>
					</div>
				</div>
      		</div>
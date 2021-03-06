<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>
		
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		
		
		
  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

		<!-- CSS HACKS -->
		<!-- FIREFOX -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/moz.css" />

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">
				
					<div id="mobile-top-tabs">
						<a id="phone-tab" href="tel:18883437436" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/images/azizi_phone.png"></a>
						<!--<a id="email-tab" href="#mail-popup" rel="wp-video-lightbox"><img src="<?php echo get_template_directory_uri(); ?>/images/azizi_email.png"></a>-->
						<a id="espanol-tab" href="http://www.azizipersonalinjury.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/azizi_espanol.png"></a>
					</div>
					
					<a href="<?php echo home_url(); ?>" rel="nofollow"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/azizi_logo.png"></a>
					
					<div id="top-tabs">
						<a id="phone-tab" href="tel:18883437436"><img src="<?php echo get_template_directory_uri(); ?>/images/azizi_phone.png"></a>
						<a id="email-tab" href="#mail-popup" rel="wp-video-lightbox"><img src="<?php echo get_template_directory_uri(); ?>/images/azizi_email.png"></a>
						<a id="espanol-tab" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/azizi_espanol.png"></a>
					</div>
					
					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->

			<?php
				$currentPage = get_the_ID();
				
				if($currentPage != '25' || $currentPage == '25') :  
			?>
			
			<div id="header-banner" role="banner"> 
			
				<div id="inner-header-banner" class="wrap">
					<table><tr><td>
					<div class="threecol first clearfix" id="header-banner-image">
						<img src="<?php echo get_template_directory_uri();?>/images/azizi_header-alt_photo.png">
					</div>
					<div class="fivecol clearfix">
						<img id="header-banner-text" src="<?php echo get_template_directory_uri();?>/images/azizi_header-alt_text.png">
					</div>
				
					<div id="home-boxes" class="fourcol clearfix">
						<div id="header-verdicts">
							<a href="<?php echo get_home_url() ?>/category/veredictos-asentamientos/"><h1 class="lang-spanish">VEREDICTOS & ASENTAMIENTOS</h1></a>
							<div id="header-ticker" style="margin-left:10px;margin-right:10px;">
								<?php if(function_exists('ditty_news_ticker')){ditty_news_ticker(72);} ?>
							</div>
						</div>
				
					</div> 
					</td></tr></table>
				</div>
				
			</div>
			
			<?php else: ?>
			<!-- Specific Home Page Banner-->
			<div id="home-banner" role="banner"> 
			
				<div id="inner-home-banner" class="wrap clearfix row">
					<table><tr>
						<td>
						<div class="threecol first clearfix" id="home-features">
						<img id="azizi-bust" src="<?php echo get_template_directory_uri();?>/images/azizi_bust.png">
					</div>
				
					<div class="ninecol clearfix" id="home-special-content">
						<div>
							<img id="text-01" class="graphic-text" src="<?php echo get_template_directory_uri();?>/images/azizi_header_text_01.png">
						</div>
						<div id ="home-boxes">
							<div id="header-video">
								<img src="<?php echo get_template_directory_uri(); ?>/images/azizi_video.jpg">
								<a href="http://www.youtube.com/watch?v=M-3VlrceBzY" rel="wp-video-lightbox" id="play-button">
									<img  src="<?php echo get_template_directory_uri();?>/images/azizi_header_play-btn.png" alt="">
								</a>
							</div>
							<div id="header-verdicts">
								<a href="<?php echo get_home_url() ?>/category/veredictos-asentamientos/"><h1 class="lang-spanish">VEREDICTOS & ASENTAMIENTOS</h1></a>
								<div id="header-ticker" style="margin-left:10px;margin-right:10px;">
									<?php if(function_exists('ditty_news_ticker')){ditty_news_ticker(72);} ?>
								</div>
							</div>
						</div>
					
						<div id="header-consultation">
							<img id="text-02" class="graphic-text" src="<?php echo get_template_directory_uri();?>/images/azizi_header_text_02.png">
						</div>
					
					</div>
						</td>	
					</tr></table>
					
				</div>
			</div>
			
			<?php endif; ?>

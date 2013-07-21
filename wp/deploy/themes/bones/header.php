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
		<link href="https://plus.google.com/u/0/111063509138386144253/about" rel="publisher" />
		
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

		<!-- CSS HACKS -->
		<!-- FIREFOX -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/moz.css" />

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">
					
					<div id="mobile-top-tabs">
						<a id="phone-mobile-tab" href="tel:18009915292"><img alt="phone number" src="<?php echo get_template_directory_uri(); ?>/images/azizi_phone.png" height="31" width="188"></a>
						<!--<a id="email-tab" href="#mail-popup" rel="wp-video-lightbox"><img src="<?php echo get_template_directory_uri(); ?>/images/azizi_email.png"></a>-->
						<a id="espanol-mobile-tab" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/espanol"><img alt="Spanish Site" src="<?php echo get_template_directory_uri(); ?>/images/azizi_espanol.png" height="31" width="64"></a>
					</div>
					
					<a href="<?php echo home_url(); ?>" rel="nofollow"><img alt="David Azizi Law Offices Logo" id="logo" src="<?php echo get_template_directory_uri(); ?>/images/azizi_logo.png" width="330" height="51"></a>
					
					<div id="top-tabs">
						<a id="phone-tab" href="tel:18009915292"><img alt="phone number" src="<?php echo get_template_directory_uri(); ?>/images/azizi_phone.png" height="31" width="188"></a>
						<a id="email-tab" href="#mail-popup" rel="wp-video-lightbox"><img alt="email address" src="<?php echo get_template_directory_uri(); ?>/images/azizi_email.png" height="31" width="110"></a>
						<a id="espanol-tab" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/espanol"><img alt="Spanish Site" src="<?php echo get_template_directory_uri(); ?>/images/azizi_espanol.png" height="31" width="64"></a>
					</div>
					
					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->

			<?php
				$currentPage = get_the_ID();
				
				if($currentPage != '25') :  
			?>
			
			<div id="header-banner" role="banner"> 
			
				<div id="inner-header-banner" class="wrap">
					<table><tr><td>
					<div class="threecol first clearfix" id="header-banner-image">
						<img alt="David Azizi, Attorney Portrait" src="<?php echo get_template_directory_uri();?>/images/azizi_header-alt_photo.png">
					</div>
					<div class="fivecol clearfix">
						<img alt="95% success rate personal injury law" id="header-banner-text" src="<?php echo get_template_directory_uri();?>/images/azizi_header-alt_text.png">
					</div>
				
					<div id="home-boxes" class="fourcol clearfix">
						<div id="header-verdicts">
							<a href="<?php echo get_home_url() ?>/category/verdicts-settlements/"><h1>VERDICTS & SETTLEMENTS</h1></a>
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
						<img alt="David Azizi Attorney Portrait" id="azizi-bust" src="<?php echo get_template_directory_uri();?>/images/azizi_bust.png" width="288" height="375">
					</div>
				
					<div class="ninecol clearfix" id="home-special-content">
						<div>
							<img alt="Personal Injury 98% success rate" id="text-01" class="graphic-text" src="<?php echo get_template_directory_uri();?>/images/azizi_header_text_01.png">
						</div>
						<div id ="home-boxes">
							<div id="header-video">
								<img alt="personal injury law" src="<?php echo get_template_directory_uri(); ?>/images/azizi_video.jpg" width="181" height="130">
								<a href="http://www.youtube.com/watch?v=M-3VlrceBzY" rel="wp-video-lightbox" id="play-button">
									<img alt="play button" src="<?php echo get_template_directory_uri();?>/images/azizi_header_play-btn.png" width="179" height="131">
								</a>
							</div> 
							<div id="header-verdicts">
								<a href="<?php echo get_home_url() ?>/category/verdicts-settlements/"><h1>VERDICTS & SETTLEMENTS</h1></a>
								<div id="header-ticker" style="margin-left:10px;margin-right:10px;">
									<?php if(function_exists('ditty_news_ticker')){ditty_news_ticker(72);} ?>
								</div>
							</div>
						</div>
					
						<div id="header-consultation">
							<img alt="free consultation 24/7" id="text-02" class="graphic-text" src="<?php echo get_template_directory_uri();?>/images/azizi_header_text_02.png">
						</div>
					
					</div>
						</td>	
					</tr></table>
					
				</div>
			</div>
			
			<?php endif; ?>

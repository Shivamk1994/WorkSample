<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="http://mokkishop.no/distributor/skin/frontend/ves_gentshop/default1/favicon.ico" type="image/x-icon" />
	<title><?php wp_title(''); ?></title>
	<?php wp_head();?>
</head>


<body <?php body_class(); ?>>
	<header>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="header-bg" style="background-image:url(<?php echo get_theme_mod('header_image')?>);"></div>
				<!--Brand and toggle get grouped for better mobile display-->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" id="menu_button">
						<span class="icon-bar top-bar"></span>
						<span class="icon-bar mid-bar"></span>
						<span class="icon-bar bot-bar"></span>
					</button>
					<div class="img-holder">
						<a class="navbar-brand mobile clearfix" href="<?php echo get_home_url();?>">
				            <img src="<?php echo get_theme_mod('logo_url'); ?>" >
				        </a>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="ul-holder clearfix">
						<?php
							wp_nav_menu(array(
							'theme_location'=>'primary',
							'container' => false,
							'menu_class' => 'nav navbar-nav',)
							);
						?>
					</div>
				</div>
			</div>
		</nav>
		<input type="hidden" id="home-dir" data-homedir="<?php echo get_template_directory_uri(); ?>" >

		<script>
		    var admin_ajax="<?php echo admin_url('admin-ajax.php'); ?>";
		</script>
	</header>
	<div class="the_loader"></div>

<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="<?php bloginfo('admin_email'); ?>">
	<meta name="generator" content="Wordpress - BIREME / OPAS / OMS - Márcio Alves">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=1" /> 
	<?php wp_head(); ?>
</head>
<header class="" id="headerIn">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="Brand e-BlueInfo" height="80px"></a>
			</div>
			<div class="col-md-6" id="">
				<div id="lang">
					<?php 
					wp_nav_menu( array(
						'theme_location'    => 'Language',
						'depth'             => 1,
						'container'         => 'ul',
						'container_class'   => 'list-unstyled',
						'container_id'      => '',
						'menu_class'        => '',
					) );
					?>
				</div>
				<nav id="nav">
					<?php
					wp_nav_menu( array(
						'theme_location'    => 'main-nav',
						'depth'             => 1,
						'container'         => 'ul',
						'container_class'   => 'list-unstyle',
						'container_id'      => '',
						'menu_class'        => '',
					) );
					?>
				</nav>
			</div>
		</div>
	</div>
</header>
<header class="banner">
	<a class="logo header-logo" href="<?php echo home_url('/'); ?>"></a>
	<button id="showRight" type="button" class="collapsed" data-toggle="collapse" aria-expanded="false">
		<span class="sr-only">Toggle navigation</span>
		<span class="ui-menu__content">
			<i class="ui-menu__line ui-menu__line_1"></i>
			<i class="ui-menu__line ui-menu__line_2"></i>
			<i class="ui-menu__line ui-menu__line_3"></i>
		</span>
	</button>
	<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="side-panel">
		<div class="cr-bug"></div>
		<a href="#" class="btn btn-primary btn-block">Subscribe</a>
		<?php wp_nav_menu( array( 
		'theme_location' => 'primary_navigation',
		'container'       => 'div',
		'container_class' => 'primary-nav'
		) ); ?>
		<?php wp_nav_menu( array( 
		'theme_location' => 'secondary_navigation',
		'container'       => 'div',
		'container_class' => 'secondary-nav'
		) ); ?>
		<div class="copyright">
			&copy; <?php echo date("Y");?> CrimeReports
		</div>
	</nav>
</header>
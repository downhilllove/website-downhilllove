<?php

	/*
	*
	*	Header Vertical
	*	------------------------------------------------
	* 	Copyright Swift Ideas 2015 - http://www.swiftideas.com
	*
	*	Output for header-vert
	*
	*/
?>

<header id="header" class="clearfix">
	<?php echo sf_logo( 'logo-center' ); ?>
</header>

<?php do_action('sf_header_start'); ?>

<div id="vertical-nav" class="vertical-menu">
	<?php echo sf_main_menu( 'main-navigation', 'vertical' ); ?>
</div>

<?php do_action('sf_header_end'); ?>
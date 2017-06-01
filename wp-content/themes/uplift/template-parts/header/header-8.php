<?php

	/*
	*
	*	Header 8
	*	------------------------------------------------
	* 	Copyright Swift Ideas 2015 - http://www.swiftideas.com
	*
	*	Output for header-8
	*
	*/
	
	$sf_options = sf_get_theme_opts();
	$header_left_output  = sf_header_aux( 'left' );
	$header_right_output = sf_header_aux( 'right' );
	$fullwidth_header    = $sf_options['fullwidth_header'];
?>

<?php if ( $fullwidth_header ) { ?>
<header id="header" class="sticky-header fw-header clearfix">
<?php } else { ?>
<header id="header" class="sticky-header clearfix">
<?php } ?>
	<?php do_action('sf_header_start'); ?>
	<div class="container">
		<div class="row">
		
			<?php echo sf_logo( 'col-sm-4 logo-left' ); ?>
			
			<div class="header-right col-sm-8">
				<?php echo $header_right_output; ?>
			</div>
					
		</div> <!-- CLOSE .row -->
	</div> <!-- CLOSE .container -->
	<?php do_action('sf_header_end'); ?>
</header>
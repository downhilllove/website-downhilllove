<?php
    $sf_options = sf_get_theme_opts();
    $type = "";
    if ( isset($sf_options['404_type']) ) {
    	$type = $sf_options['404_type'];
    }
    
    if ( $type == "page" ) {
    	$page = $sf_options['404_page'];
        $current_page_URL = sf_current_page_url();
        $page_URL = get_permalink( $page );

	    if ( $current_page_URL != $page_URL ) {
            wp_redirect( $page_URL );
            exit;
        }
    }
    
    $error_content = $sf_options['404_page_content'];
?>

<div class="help-text">
    <?php echo $error_content; ?>
</div>
<form method="get" class="search-form" action="<?php echo home_url(); ?>/">
    <input type="text" placeholder="<?php _e( 'Search', 'uplift' ); ?>" name="s"/>
</form>
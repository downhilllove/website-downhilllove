<?php

/**
 * User Registration Form
 *
 * @package bbPress
 * @subpackage Uplift
 */

?>

<form method="post" action="<?php bbp_wp_login_action( array( 'context' => 'login_post' ) ); ?>" class="bbp-login-form">
	<fieldset class="bbp-form">
		<legend><?php _e( 'Create an Account', 'uplift' ); ?></legend>

		<div class="bbp-template-notice">
			<p><?php _e( 'Your username must be unique, and cannot be changed later.', 'uplift' ) ?></p>
			<p><?php _e( 'We use your email address to email you a secure password and verify your account.', 'uplift' ) ?></p>

		</div>

		<div class="bbp-username">
			<label for="user_login"><?php _e( 'Username', 'uplift' ); ?>: </label>
			<input type="text" name="user_login" value="<?php bbp_sanitize_val( 'user_login' ); ?>" size="20" id="user_login" tabindex="<?php bbp_tab_index(); ?>" />
		</div>

		<div class="bbp-email">
			<label for="user_email"><?php _e( 'Email', 'uplift' ); ?>: </label>
			<input type="text" name="user_email" value="<?php bbp_sanitize_val( 'user_email' ); ?>" size="20" id="user_email" tabindex="<?php bbp_tab_index(); ?>" />
		</div>

		<?php do_action( 'register_form' ); ?>

		<div class="bbp-submit-wrapper">

			<button type="submit" tabindex="<?php bbp_tab_index(); ?>" name="user-submit" class="button submit user-submit"><?php _e( 'Register', 'uplift' ); ?></button>

			<?php bbp_user_register_fields(); ?>

		</div>
	</fieldset>
</form>

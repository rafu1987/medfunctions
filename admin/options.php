<div class="wrap">
	<h2>medialis.net Functions</h2>
	<form method="post" action="options.php"> 
		<?php settings_fields( 'default' ); ?>
		<h3>Server settings</h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><label for="medfunctions_staging">Staging URL</label></th>
					<td><input type="text" id="medfunctions_staging" name="medfunctions_staging" value="<?php echo get_option('medfunctions_staging'); ?>" /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="medfunctions_live">Live URL</label></th>
					<td><input type="text" id="medfunctions_live" name="medfunctions_live" value="<?php echo get_option('medfunctions_live'); ?>" /></td>
				</tr>
			</table>
		<?php submit_button(); ?>
	</form>
</div>
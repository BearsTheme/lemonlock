
<div class="wrap-lemon-lock-adv">
	<h1><?php _e('Setting Lemon Lock Advertisement','lemon-lock'); ?></h1>
	  <form method="post" action="options.php">
		<?php settings_fields( 'lemon_lock_adv_option' ); ?>
		<?php do_settings_sections( 'lemon_lock_adv_option' ); ?>
		<div>
			<div class="group-lemon">
				<label class="lb-lemon-lock"><strong><?php _e('Copy','lemon-lock'); ?></strong></label>
				<input type="checkbox" name="lemon_lock_copy" class="ipu_lemon_lock" value="yes" <?php echo (get_option( 'lemon_lock_copy' ) == "yes") ? "checked='checked'" : "" ; ?> />
			</div> 
			
			<div class="group-lemon">
				<label class="lb-lemon-lock"><strong><?php _e('Right Mouse','lemon-lock'); ?></strong></label>
				<input type="checkbox" name="lemon_lock_rightmouse" class="ipu_lemon_lock"  value="yes" <?php echo (get_option( 'lemon_lock_rightmouse' ) == "yes") ? "checked='checked'" : "" ; ?> />
			</div> 
			
			<div class="group-lemon">
				<label class="lb-lemon-lock"><strong><?php _e('Debug','lemon-lock'); ?></strong></label>
				<input type="checkbox" name="lemon_lock_debug" class="ipu_lemon_lock" value="yes" <?php echo (get_option( 'lemon_lock_debug' ) == "yes") ? "checked='checked'" : "" ; ?> />
			</div>
			
			<div class="group-lemon">
				<label class="lb-lemon-lock-adv"><strong><?php _e('Enable Popup Advertisement','lemon-lock'); ?></strong></label>
				
				<p>
					<input type="radio" name="lemon_lock_controladv" id="control_enable" value="1" <?php echo (get_option( 'lemon_lock_controladv' ) == 1) ? "checked='checked'" : "" ; ?> /><label class="lb-radio" for="control_enable"><?php _e('Yes','lemon-lock'); ?></label>
					<input type="radio" name="lemon_lock_controladv" id="control_disable" value="0" <?php echo (get_option( 'lemon_lock_controladv' ) == 0) ? "checked='checked'" : "" ; ?> /><label class="lb-radio" for="control_disable"><?php _e('No','lemon-lock'); ?></label>
				</p>
			</div>
			
			<div class="group-lemon">
				<label class="lb-lemon-lock-adv"><strong><?php _e('Content Popup Advertisement','lemon-lock'); ?></strong></label>
				<p>
					<?php
						$settings_content = array( 'media_buttons' => true,'textarea_name' => 'lemon_lock_popupadv' );
						wp_editor( get_option( 'lemon_lock_popupadv' ), 'lemon_lock_popupadv', $settings_content );
					?>
				</p>
			</div>
		</div>
		
		<?php submit_button(); ?>
	  </form>
</div>
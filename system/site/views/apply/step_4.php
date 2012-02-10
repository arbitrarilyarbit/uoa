<div class="section title">
	<h3><?php echo lang('header'); ?></h3>
</div>

<div class="section item">
	<p><?php echo lang('intro_text'); ?></p>
	<p><?php echo lang('text'); ?></p>
</div>

<?php echo form_open_multipart(uri_string(), 'id="install_frm"'); ?>

	<div class="section title">
		<h3><?php echo lang('first_header'); ?></h3>
	</div>

	<div class="section item">

		<div class="input">
			<label for="pic">Photograph</label>
			<?php
				echo form_upload(array(
					'id' => 'userfile',
					'name' => 'userfile'
				));
			?>
		</div>

		<br/>
		<input type="hidden" name="application_step" value="step_4" />
		<input id="next_step" type="submit" id="submit" value="<?php echo lang('next'); ?>" class="btn orange" />
	</div>
	
<?php echo form_close(); ?>
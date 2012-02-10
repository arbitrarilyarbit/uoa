<div class="section title">
	<h3><?php echo lang('header'); ?></h3>
</div>

<div class="section item">
	<p><?php echo lang('intro_text'); ?></p>
</div>

<?php echo form_open(uri_string(), 'id="install_frm"'); ?>

	<div class="section title">
		<h3><?php echo lang('first_header'); ?></h3>
	</div>

	<div class="section item">
		<p><?php echo lang('first_text'); ?></p>
	</div>
	
	<div class="section title">
		<h3><?php echo lang('second_header'); ?></h3>
	</div>
	
	<div class="section item">
		<p><?php echo lang('second_text'); ?></p>

		<div class="input">
			<label for="cgpa">CGPA</label>
			<?php
				echo form_input(array(
					'id' => 'cgpa',
					'name' => 'cgpa',
					'value' => ''
				));
			?>
		</div>

		<br/>
		<input type="hidden" name="application_step" value="step_2" />
		<input id="next_step" type="submit" id="submit" value="<?php echo lang('next'); ?>" class="btn orange" />
	</div>
	
<?php echo form_close(); ?>
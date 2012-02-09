<div class="section title">
	<h3>{header}</h3>
</div>

<div class="section item">
	<p>{intro_text}</p>
	<p>{text}</p>
</div>

<?php echo form_open(uri_string(), 'id="install_frm"'); ?>

	<div class="section title">
		<h3>{first_header}</h3>
	</div>

	<div class="section item">

		<div class="input">
			<label for="pic">Photograph</label>
			<?php
				echo form_input(array(
					'id' => 'pic',
					'name' => 'pic',
					'value' => ''
				));
			?>
		</div>

		<br/>
		<input type="hidden" name="application_step" value="step_4" />
		<input id="next_step" type="submit" id="submit" value="{next}" class="btn orange" />
	</div>
	
<?php echo form_close(); ?>
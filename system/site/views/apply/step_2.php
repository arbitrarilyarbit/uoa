<div class="section title">
	<h3>{header}</h3>
</div>

<div class="section item">
	<p>{intro_text}</p>
</div>

<?php echo form_open(uri_string(), 'id="install_frm"'); ?>

	<div class="section title">
		<h3>{first_header}</h3>
	</div>

	<div class="section item">
		<p>{first_text}</p>
	</div>
	
	<div class="section title">
		<h3>{second_header}</h3>
	</div>
	
	<div class="section item">
		<p>{second_text}</p>

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
		<input id="next_step" type="submit" id="submit" value="{next}" class="btn orange" />
	</div>
	
<?php echo form_close(); ?>
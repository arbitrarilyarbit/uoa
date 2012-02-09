<!-- Intro page -->
<div class="section title">
	<h3>{header}</h3>
</div>

<div class="section item">
	<p>{intro_text}</p>
</div>

<?php echo form_open(uri_string(), 'id="install_frm"'); ?>

	<div class="section title">
		<h3>{first-header}</h3>
	</div>
	
	<div class="section item">
		<p>{first-text}</p>

		<div class="input">
			<label for="first_name">First Name</label>
			<?php
			echo form_input(array(
				'id' => 'first_name',
				'name' => 'first_name',
				'value' => '',
			));
			?>

			<label for="middle_name">Middle Name</label>
			<?php
				echo form_input(array(
					'id' => 'middle_name',
					'name' => 'middle_name',
					'value' => ''
				));
			?>
		</div>

		<div class="input">
			<label for="last_name">Last Name</label>
			<?php
				echo form_input(array(
					'id' => 'last_name',
					'name' => 'last_name',
					'value' => ''
				));
			?>
		</div>

	</div>
	
	<div class="section title">
		<h3>{second-header}</h3>
	</div>
	
	<div class="section item">
		<p>{second-text}</p>

		<div class="input">
			<label for="father_name">Father&apos;s Name</label>
			<?php
			echo form_input(array(
				'id' => 'father_name',
				'name' => 'father_name',
				'value' => '',
			));
			?>

			<label for="mother_name">Mother&apos;s Name</label>
			<?php
				echo form_input(array(
					'id' => 'mother_name',
					'name' => 'mother_name',
					'value' => ''
				));
			?>
		</div>
		<br/>
		<input type="hidden" name="application_step" value="step_1" />
		<input id="next_step" type="submit" id="submit" value="{next}" class="btn orange" />
	</div>
	
<?php echo form_close(); ?>
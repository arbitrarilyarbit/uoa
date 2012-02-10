<div class="section title">
	<h3><?php echo lang('header'); ?></h3>
</div>

<?php echo form_open(uri_string(), 'id="install_frm"'); ?>
	<div class="section item">
		<p><?php echo lang('intro_text'); ?></p>
		<br/>
		<input type="hidden" name="application_step" value="complete" />
		<input id="next_step" type="submit" id="submit" value="<?php echo lang('next'); ?>" class="btn orange" />
	</div>
<?php echo form_close(); ?>

<div class="section title">
	<h3><?php echo lang('s_1'); ?></h3>
</div>

<div class="section item">
	<p></p>
</div>

<div class="section title">
	<h3><?php echo lang('s_2'); ?></h3>
</div>

<div class="section item">
	<p></p>
</div>

<div class="section title">
	<h3><?php echo lang('s_3'); ?></h3>
</div>

<div class="section item">
	<p></p>
</div>

<div class="section title">
	<h3><?php echo lang('s_4'); ?></h3>
</div>

<div class="section item">
		<p></p>
</div>
<!-- Welcome -->
<div class="section title">
	<h3><?php echo lang('header'); ?></h3>
</div>

<div class="section item">
	<p><?php echo lang('welcome_text'); ?></p>
	<p><?php echo lang('thankyou'); ?></p>
	<p><?php echo lang('elig_crit'); ?></p>
	<p><?php echo lang('text'); ?></p>
	<a class="btn orange" id="next_step" href="<?php echo site_url('apply/step_1'); ?>" title="<?php echo lang('link'); ?>"><?php echo lang('next'); ?></a>
</div>

<div class="section title">
	<h3><?php echo lang('retrieve_header'); ?></h3>
</div>

<div class="section item">
	<p><?php echo lang('retrieve_text'); ?></p>
	<!-- form to retrieve application -->
	<a class="btn orange" id="retrieve_app" href="<?php echo site_url('apply/retrieve'); ?>" title="<?php echo lang('retrieve_link'); ?>"><?php echo lang('retrieve_app'); ?></a>
</div>
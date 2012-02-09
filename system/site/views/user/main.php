<!-- Welcome -->
<div class="section title">
	<h3>{header}</h3>
</div>

<div class="section item">
	<p>{welcome-text}</p>
	<p>{thankyou}</p>
	<p>{elig-crit}</p>
	<p>{text}</p>
	<a class="btn orange" id="next_step" href="<?php echo site_url('user/step_1'); ?>" title="{link}">{next}</a>
</div>

<div class="section title">
	<h3>{retrieve-header}</h3>
</div>

<div class="section item">
	<p>{retrieve-text}</p>
	<!-- form to retrieve application -->
	<a class="btn orange" id="retrieve_app" href="<?php echo site_url('user/retrieve'); ?>" title="{retrieve-link}">{retrieve-app}</a>
</div>
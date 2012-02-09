<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
	<meta charset="utf-8">
	<title>Welcome to University of Allahabad</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" />
</head>

<body>
		<div class="topbar">
			<div class="wrapper">
				<div id="logo"><img height="55px" src="<?php echo base_url(); ?>assets/img/logo.png" alt="University of Allahabad" /></div>
			</div>
		</div>

	<div id="container">

		<div id="menu">
			<ul>
				<li><?php echo anchor('', lang('intro'), $this->uri->segment(2, '') == '' ? 'id="current"' : ''); ?></li>
				<li><span id="<?php echo $this->uri->segment(2, '') == 'step_1' ? 'current' : '' ?>"><?php echo lang('step1'); ?></span><span class="sep"></span></li>
				<li><span id="<?php echo $this->uri->segment(2, '') == 'step_2' ? 'current' : '' ?>"><?php echo lang('step2'); ?></span><span class="sep"></span></li>
				<li><span id="<?php echo $this->uri->segment(2, '') == 'step_3' ? 'current' : '' ?>"><?php echo lang('step3'); ?></span><span class="sep"></span></li>
				<li><span id="<?php echo $this->uri->segment(2, '') == 'step_4' ? 'current' : '' ?>"><?php echo lang('step4'); ?></span><span class="sep"></span></li>
				<li><span id="<?php echo $this->uri->segment(2, '') == 'review' ? 'current' : '' ?>"><?php echo lang('review'); ?></span><span class="sep"></span></li>
				<li><span id="<?php echo $this->uri->segment(2, '') == 'complete' ? 'current' : '' ?>"><?php echo lang('final'); ?></span><span class="sep"></span></li>
			</ul>
		</div>

		<!-- Message type 1 (flashdata) -->
		<?php if($this->session->flashdata('message')): ?>
			<ul class="block-message success <?php echo ($this->session->flashdata('message_type')) ? $this->session->flashdata('message_type') : 'block-message success'; ?>">
				<li><?php if($this->session->flashdata('message')) { echo $this->session->flashdata('message'); }; ?></li>
			</ul>
		<?php endif; ?>

		<!-- Message type 2 (validation errors) -->
		<?php if ( validation_errors() ): ?>
			<div id="notification">
				<ul class="block-message error">
					<?php echo validation_errors('<li>', '</li>'); ?>
				</ul>
			</div>
		<?php endif; ?>

		<?php echo $page_output . PHP_EOL; ?>

	</div>

	<!-- Begin footer -->
	<div id="footerWrapper">
		<div id="poweredby"><a href="http://y3kimaginations.co.in/">Powered By Y3K Imaginations</a></div>
		<div>&copy; 2012 University of Allahabad. All Rights Reserved</div>
	</div>
	<!-- End footer -->

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>

</body>
</html>
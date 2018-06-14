<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<style>
.my-card {
  width: 100%;
  max-width: 800px;
	min-width: 500px;

  margin: 0 auto;
	margin-top:70px;
}
.g-recaptcha{
	margin-top: 45%;
	 left: 22%;
	position:absolute;
	z-index: 1;
}

</style>

<body style="background-color: lightgrey;">

<div id="container">
	<div class="my-card">
		<div class="card">
			<div class="card-header" style="background-color: grey; color: white">
			 Contact
			</div>
			<div class="card-block">

			<?php echo form_open('contactform/send'); ?>
				<?php echo form_label('Name :'); ?>
				<?php echo form_input(array('id' => 'name', 'name' => 'name')); ?><br/>
				<?php echo form_label('Email :'); ?>
				<?php echo form_input(array('id' => 'email', 'name' => 'email')); ?><br/>
				<?php echo form_label('Subject :'); ?>
				<?php echo form_input(array('id' => 'subject', 'name' => 'subject')); ?><br/>
				<?php echo form_label('Message:'); ?><br/>
				<?php echo form_textarea(array('id' => 'message', 'name' => 'message')); ?><br/>
				<?php echo form_label('6+3=?:'); ?>
				<?php echo form_input(array('id' => 'check', 'name' => 'check')); ?><br/>
				<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
				<?php echo form_close(); ?>
			
		</div>
	</div>
</div>













</div>

</body>
</html>

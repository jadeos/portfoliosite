
<body>
<div id="signup_form" alt="login to your account">
	
	<p class="heading">User Login</p>
	
	<?php echo form_open('login/submit'); ?>
	
	<?php echo validation_errors('<p class="error">','</p>'); ?>
	
	<p>
		<label for="username" alt="Enter your username">Username: </label>
		<?php echo form_input('username',set_value('username')); ?>
	</p>
	<p>
		<label for="password" alt ="Enter your password">Password: </label>
		<?php echo form_password('password'); ?>
	</p>
	<p>
		<?php echo form_submit('submit','Login'); ?>
	</p>

	<?php echo form_close(); ?>
	<p>
		<?php echo anchor('signup','Create an Account'); ?>
	</p>

	<div>

		<p>
			Return to the <?php echo anchor('/','home'); ?> page
		</p>

	</div>

</div>

</body>

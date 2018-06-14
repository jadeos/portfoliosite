
<div id="signup_form">

    <p class="heading">Admin Login</p>

    <?php echo form_open('adminLogin/submit'); ?>

    <?php echo validation_errors('<p class="error">','</p>'); ?>

    <p>
        <label for="username">Username: </label>
        <?php echo form_input('username',set_value('username')); ?>
    </p>
    <p>
        <label for="password">Password: </label>
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

        <p>
            User Login: <?php echo anchor('/login','Login'); ?>
        </p>

    </div>

</div>

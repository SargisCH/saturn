<div id="login_block" class="form-group">
    <?php
    $attributes = array('id' => 'login_form', 'method' => 'post');
    echo form_open('login_and_register/login', $attributes);?>
    <label for="username">
        Username <input class="form-control" id="username" type="text" value="<?php echo set_value('username'); ?>" name='username' ><br><br>
    </label>
    <?php echo form_error('username'); ?>
    <label for="password">
        Password <input class="form-control" id="password" type="password"  name="password" ><br><br>
    </label>
    <?php echo form_error('password'); ?>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
    <?php echo form_close();?>
</div>
<?php
if(isset($error)){
    echo  "<p class='alert alert-danger'>" . $error . "</p>";
}
?>
<div id="register_link">
    <a href="<?php echo base_url('login_and_register/register'); ?>">Registration</a>
</div>

<div id="register_block" class="form-group">
    <?php
    $attributes = array('id' => 'register_form', 'method' => 'post');
    echo form_open('login_and_register/register', $attributes);?>
    <label for="username">
        Username <input class="form-control" id="username" type="text" value="<?php echo set_value('username'); ?>" name='username' ><br><br>
    </label>
    <?php echo form_error('username'); ?>
    <label for="password">
        Password <input class="form-control" id="password" type="password"  name="password" ><br><br>
    </label>
    <?php echo form_error('password'); ?>
    <label for="confirm_password">
        Confirm Password <input class="form-control" id="confirm_password" type="password"  name="confirm_password" ><br><br>
    </label>
    <?php echo form_error('confirm_password'); ?>
    <label for="email">
        Email <input class="form-control" id="email" type="text" value="<?php echo set_value('email'); ?>" name="email" ><br><br>
    </label><br><br>
    <?php echo form_error('email'); ?>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
    <?php echo form_close();?>
</div>
<div id="success" class="alert alert-success">
    <?php
    if(isset($success)){
        echo  "<p>" . $success . "</p>";
    }
    ?>
</div>
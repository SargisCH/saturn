<style>
    #add_product p{
	position: relative;
	bottom: 0;
}
</style>
<div id="add_product" class="form-group">
    <?php 
        $attributes = array('id' => 'form', 'method' => 'post', 'enctype' => 'multipart/form-data');
        echo form_open('products/add', $attributes);?>
        <label for="title">
            Title <input class="form-control" id="title" type="text" value="<?php echo set_value('title'); ?>" name='title' ><br><br>
        </label>
        
        <?php echo form_error('title'); ?>
        <label for="description">
            Description <input class="form-control" id="description" type="text" value="<?php echo set_value('description'); ?>" name="description" ><br><br>
        </label>
        <?php echo form_error('description'); ?>
            Image <input class="form-control" id="image" type="file" value="<?php echo set_value('userfile'); ?>" name="userfile"><br><br>
        <?php echo form_error('userfile'); ?>
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




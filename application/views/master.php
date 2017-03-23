<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	 <link rel = "stylesheet" type = "text/css" 
	   href = "<?php echo base_url(); ?>css/style.css">
	   <link rel = "stylesheet" type = "text/css" 
	   href = "<?php echo base_url(); ?>css/media.css"> 
   <link rel = "stylesheet" type = "text/css" 
   href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <?php $this->load->view($content)?>
    <script
        src="https://code.jquery.com/jquery-3.1.1.js"
        integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
        crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</html>
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body >
        <header>
            <div id="logo_block">
                <i id="menu_button" class="fa fa-bars fa-2x" aria-hidden="true"></i>
                <h1 id="logo">Saturn</h1>
            </div>
            <nav id="navigation-bar">
                <ul id="menu">
                    <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                    <li><a href="<?php echo base_url('products/add_view'); ?>" >Add products</a></li>
                    <li><a href="<?php echo base_url('archive'); ?>">Archive</a></li>
                    <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
                </ul>
            </nav>
        </header>
    <?php $this->load->view($content)?>
    <footer>
		
			<div id="copyright">
				HANDCRAFTED BY &copy FLAMEKAIZAR
			</div>
		</footer>
	
    <script
        src="https://code.jquery.com/jquery-3.1.1.js"
        integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
        crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>../../js/main.js"></script>

</html>
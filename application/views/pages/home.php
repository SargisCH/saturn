<body >
	<header>
		<div id="logo_block">
			<i id="menu_button" class="fa fa-bars fa-2x" aria-hidden="true"></i>
			<h1 id="logo">Saturn</h1>
		</div>
		<nav id="navigation-bar">
			<ul id="menu">
				<li><a href="">Home</a></li>
				<li><a href="<?php echo base_url('products/add'); ?>" target="_blank">Add products</a></li>
				<li><a href="<?php echo base_url('archive'); ?>">Archive</a></li>
				<li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
			</ul>
		</nav>
	</header>
	<div id="main">
		<div id="info">
			 <img id="head-bg" src="<?php echo base_url(); ?>img/head-bg.jpg" alt="head-img">
			 <div id="info_text">
				 <img  class="info_text_content" src="<?php echo base_url(); ?>img/avatar.png" alt="avatar">
				 <p class="info_text_content" id="info_text_content">HELLO, I’M SATURN. I’M PROUD TO BE A PART OF MILKY WAY.</p>
			 </div> 
		</div>
		<div id="content">
		<?php foreach ($products as $item):?>
			<div class="block" id="block<?=$item['id'];?>">
				<div class="caption">
					<img src="<?php echo base_url(); ?>img/separator.png" alt="separator">
					<h2><?=$item['title'];?></h2>
					<img src="<?php echo base_url(); ?>img/separator.png" alt="separator">
				</div>
				<div class="block_text" id="block1_text">
					<?=$item['description'];?>
					
				</div>
				<div class="read_button">
					Read More
				</div>
				<div class="tags_and_comments">
					<img src="<?php echo base_url(); ?>img/separator.png" alt="separator">
						<img src="<?=$item['image_url'];?>" alt="">
						
					<p><span>views: </span><a href=""><?=$item['views'];?></a></p>
				</div>
			</div>
			<?php endforeach;?>
		<footer>
			<div id="previous">
				<a href="">
					<i class="fa fa-arrow-left" aria-hidden="true"></i>
					<span>  PREVIOUS</span>
				</a>
			</div>
			<div id="contact">
				<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-vk" aria-hidden="true"></i></a>
			</div>
			<div class="clear"></div>
			<div id="copyright">
				HANDCRAFTED BY &copy FLAMEKAIZAR
			</div>
		</footer>
	</div>
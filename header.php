<?php
	$mainMail="jpk2002.jpk@gmail.com";
?>
<header class="site-header">
				<div class="container">
					<a id="branding"  class="logo" href="index.php">
						<img src="logos/logo.png" alt="Company Logo" class="logo" height="40px" width="250px">
					</a>

					<nav id="navbar" class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item <?php if($index==0){echo "current-menu-item";}?>"><a href="index.php">Home</a></li>
							<li class="menu-item <?php if($index==1){echo "current-menu-item";}?>"><a href="services.php">Services</a></li>
							<li class="menu-item <?php if($index==2){echo "current-menu-item";}?>"><a href="gallery.php">Gallery</a></li>
							<li class="menu-item <?php if($index==3){echo "current-menu-item";}?>"><a href="contact.php">Contact</a></li>
							
							
							
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> 
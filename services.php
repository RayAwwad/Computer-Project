<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Car Workshop | Service</title>
		
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content">
			
			<?php 
				$index=1;
				include("header.php"); 
			?>
			<main class="main-content" id="services-content">
				
				<div class="fullwidth-block content" id="omg">
					<div class="container">
						<h2 class="entry-title">
From routine maintenance tasks like software updates and system optimizations to intricate hardware repairs, our proficient technicians at Kloc TechCare are dedicated to ensuring your computer operates seamlessly and securely.</h2>

						<figure class="block">
							<img src="dummy/figure.jpg" alt="">
						</figure>
						<h3>We take pride in delivering thorough computer care services to keep your system in optimal condition. Our adept technicians are ready to address a spectrum of needs, from routine maintenance tasks like software updates and system optimizations to intricate hardware repairs, such as component replacements and system overhauls. Employing state-of-the-art diagnostic tools and premium-quality components, we ensure your computer functions seamlessly and securely. Explore our services today to encounter the professional care and personalized attention that distinguishes us from others in the field.</h3>

						<div class="feature-grid">
							<div class="feature">
								<figure class="feature-image"><img src="logos/cpu logo3.png" alt=""></figure>
								<h2 class="feature-title">CPU Diagnostics</h2>
								<p>Our expert technicians at kloc computers use state-of-the-art diagnostic tools to identify CPU problems quickly.</p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="logos/board logo1.png" alt=""></figure>
								<h2 class="feature-title">board</h2>
								<p>we offer a range of board services, from basic inspections and repairs to complete system overhauls.</p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="logos/hdd logo.png" alt=""></figure>
								<h2 class="feature-title">Hard disk drive</h2>
								<p>We provide an extensive array of hard disk drive services, covering fundamental optimizations like disk maintenance and file system updates to comprehensive drive overhauls and data recovery solutions..</p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="logos/cs logo.png" alt=""></figure>
								<h2 class="feature-title">System</h2>
								<p>
Whether you're contending with sluggish processing or potential data vulnerabilities, your system's well-being is our primary focus. Contact us today to schedule your comprehensive computer system service appointment.</p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="logos/gc logo.png" alt=""></figure>
								<h2 class="feature-title">Graphic cards</h2>
								<p>
We possess the expertise to promptly diagnose and rectify any graphics card issues, encompassing issues like deteriorated connectors, damaged graphics processing units (GPUs), and misaligned display configurations..</p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="logos/powersupply logo2.png" alt=""></figure>
								<h2 class="feature-title">Power supply</h2>
								<p>We provide a spectrum of power supply unit services, covering routine inspections and repairs to full-scale replacements for your computer system.</p>
							</div>
						</div>
					</div>
				</div>

			</main> 

		<?php include("footer.php");?>
		</div> 

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Computer Workshop | Gallery</title>
		
		<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		
		<link rel="stylesheet" href="style.css">
		
		

	</head>


	<body id="bodygallery">
		
		<div id="site-content">
			
			<?php
				$index=2;
				include("header.php");
				include("./Connection/query/getimageLink.php");
				include("./Connection/query/getTYpe.php");
			?>
			<main id="mainbro" class="main-content">
				
				<div id="joey3" class="fullwidth-block content">
					<div class="container">
						<h2 class="entry-title">Explore our gallery to witness the outstanding repair work we've accomplished on computers, and uncover why our clients rely on us for dependable and efficient solutions to all their computer repair requirements.</h2>

						<div class="text-center">
							<div class="filter-links filterable-nav" id="testing123">
								<select class="mobile-filter">
								<option value="*">Show all</option>
									<?php
										for($indexType=0;$indexType<
										count($type);$indexType++){
											echo '<option value=".'.$type["name"].'">'.ucfirst($type["name"]).'</option>';		
										}
									?>

								</select>
								<a href="#" class="current wow fadeInRight" data-filter="*">Show all</a>
								<?php
										for($indexType=0;$indexType<
										count($type);$indexType++){
											// echo '<option value=".'.$type["name"].'">'.ucfirst($type["name"]).'</option>';		
											echo'<a href="#" class="wow fadeInRight" data-wow-delay=".'.$indexType.'s" data-filter=".'.$type[$indexType]["name"].'">'.ucfirst($type[$indexType]["name"]).'</a>';
										}
									?>

								
								
							</div>
						</div>

						<div id="imgood" class="filterable-items">
						<?php
										for($indexType=0;$indexType<
										count($image);$indexType++){
											echo '<div class="gallery-item filterable-item '.$image[$indexType]["name"].'">
											<a href="'.$image[$indexType]["imageLink"].'"><figure class="featured-image">
													<img class="imgtozbit" src="'.$image[$indexType]["imageLink"].'" alt="">
													
												</figure></a>
										</div>';		
										}
									?>




							
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
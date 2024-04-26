<?php
include("mailConfig.php");
    if(isset($_POST["submitM"])){
        $mail->AddAddress("joeyelhaybe10@gmail.com", "");
        $mail->SetFrom("charbelkhoury99@gamil.com", "");
        $mail->Subject = $_POST["name"];
        $mail->Body = "name:".$_POST["name"]."
		\tphone number:".$_POST["phone"]."
		\tcar:".$_POST["cars"]."
		\tType:".$_POST["inputs"]."
		\tmessage".$_POST["message"];
        
        try{
            $mail->Send();
            echo "Success!";
        } catch(Exception $e){
            //Something went bad
            echo "Fail :(";
        }

        

    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Car Workshop | Contact</title>
		
	
		<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">


		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/maker.css">
		
		

	</head>


	<body>
		
		<div id="site-content">
			
			<?php
				$index=3;
			 	include("header.php"); 
			?>

			<main class="main-content">
				
				<div class="fullwidth-block content">
					<div class="container">
						<h2 class="entry-title">Please feel free to contact us via phone, email, or by filling out the contact form below with any questions or concerns you may have about our services or to schedule an appointment at our shop located at achrafieh</h2>

						<div class="row">
							<div class="col-md-5 add">
				
								<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="contact-form">
									<input type="text" id="name" name="name" placeholder="Name/Last name">
									<input type="number" id="phone" name="phone" placeholder="Phone">
									<label for="cars">Choose a brand:</label>
                                     <select name="cars" id="cars">
									 <option value="choose">Select computer</option>
									 
									 <optgroup label="All brands">

							  <option value="ford">Toshiba</option>
                             <option value="dodge">HP</option>
							 <option value="Jeep">Samsung</option>
							 <option value="chevrolet">Lenovo</option>
                        <option value="volvo">Asus</option>
                                 <option value="saab">Dell</option>
								 <option value="Scania">Acer</option>
                              <option value="mercedes">MSI</option>
                             <option value="audi">Razer</option>
							 <option value="bmw">Apple</option>
							 <option value="porshe">Microsoft</option>
							 <option value="VW">Corsair</option>
                        <option value="toyota">Microsoft Surface</option>
                             <option value="mitsubishi">Fujitsu</option>
							 <option value="nissan">Avita</option>
							 <option value="mazda">Vaio</option>
                         <option value="kia">Hcl</option>
                           <optgroup label="Other brand">
						 <option value="other">Other brand</option>
						 
                              
                        </optgroup>
                                         </select>
                                   
 									
									<div class="containerOuter">
									<div class="container1">
										<input type="radio" class="hidden" value="Oil Change" id="input1" name="inputs">
										<label class="entry" for="input1"><div class="circle"></div><div class="entry-label">Full checkup</div></label>
										<input type="radio" class="hidden" id="input2" name="inputs" value="Car Check">
										<label class="entry" for="input2"><div class="circle"></div><div class="entry-label">Specific issues</div></label>

										<input type="radio" class="hidden" id="input3" name="inputs" value="Other">
										<label class="entry" for="input3"><div class="circle"></div><div class="entry-label">Other</div></label>
										<div class="highlight"></div>
										<div class="overlay"></div>
									</div>
									</div>
									<svg width="0" height="0" viewBox="0 0 40 140">
									<defs>
										<mask id="holes">
										<rect x="0" y="0" width="100" height="140" fill="white" />
										<circle r="12" cx="20" cy="20" fill="black"/>
										<circle r="12" cx="20" cy="70" fill="black"/>
										<circle r="12" cx="20" cy="120" fill="black"/>
										</mask>
									</defs>
									</svg>

									<textarea name="message" id="message" placeholder="Message..."></textarea>
									<div class="text-right">
										<input type="submit" name="submitM" value="Send message">
									</div>
								</form>
							</div>
							<div class="col-md-6 col-md-offset-1 add">
								<div class="map-container">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.32424467135!2d35.51717067480629!3d33.881302226738676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f17abcc48a489%3A0x89d1e8e27a3c9a9b!2sKLOC%20computers!5e0!3m2!1sen!2slb!4v1703782843041!5m2!1sen!2slb" width="555" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									<address>
										<strong>kloc Computers</strong>
										<a href="mailto:lcu.seniorproject@gmail.com">lcu.seniorproject@gmail.com</a> <br>
										<span>Achrafih , Beyrouth</span>
										<a class="phone" href="tel:+96170466991">70 466 991</a>
									</address>
								</div>
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
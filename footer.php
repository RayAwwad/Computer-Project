<?php

    if($index!=3){
        include("mailConfig.php");
    }
    // echo "test";
    if(isset($_POST["subscribe"])){
        $mail->AddAddress($_POST["jpk2002.jpk"], "");
        $mail->SetFrom("lcu.seniorproject@gmail.com", "");
        $mail->Subject = "New Subscriber";
        $mail->Body = "Hello New Subscriber";
        
        try{
            $mail->Send();
            echo "Success!";
        } catch(Exception $e){
            //Something went bad
            echo "Fail :(";
        }

        

    }
?>  
<footer class="site-footer">
    <div id="joey2" class="container">
        <div class="subscribe-form">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="text" id="email-input" name="subscribeemail" placeholder="Enter your email to subscribe...">
                <button type="submit" id="submit-email" name ="subscribe"><img src="images/icon-envelope-white.png" alt=""></button>
            </form>
        </div>
        <div class="social-links">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
        </div>
        <div id="cc" class="copy">
            <p>Copyright 2023 kloc. Designed by JP. khalbourji and B.Barrak. All rights reserved.</p>
        </div>
    </div>
</footer>

<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
                <h2>Contact Us</h2>

				<?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
				<form action="process.php" method="post">                   
				    <input type="text" class="field" name="name"  placeholder="Your Name">
				    <input type="text" class="field" name="email" placeholder="Your Email">
				    <input type="text" class="field" name="phone" placeholder="Phone">
				    <textarea name="msg" placeholder="Message" class="field"></textarea>
				    <button class="btn" name="btn-send">Send</button>
                    </form>                   
			</div>
		</div>
	</div>
</body>
</html>

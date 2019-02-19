<!doctype html>

<html>
	<head>
		<title>Contact Us</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<style>
			h2{
				
				color: white;
				font-size: 20px;
				font-family: sans-serif;
				font-weight: bold;
			}
		</style>
	
	</head>

	<body>
      <?php
				$action=$_REQUEST['action'];
				if ($action=="")    
					{
					?>
					<form  action="" method="POST">
					<input type="hidden" name="action" value="submit">
						<h2>Your name:</h2><br>
					<input name="name" type="text" value="" size="30"/><br>
						<h2>Your email:</h2><br>
					<input name="email" type="text" value="" size="30"/><br>
						<h2>Your message:</h2><br>
					<textarea name="message" type="text" rows="7" cols="30"></textarea><br>
					<input type="submit" value="Send email"/>
					</form>
					<?php
					} 
				else               
					{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$message=$_REQUEST['message'];
					if (($name=="")||($email=="")||($message==""))
						{
						echo "<h2>All fields are required, please fill <a href=\"\">the form</a> again.</h2>";
						}
					else{        
						$from="From: $name<$email>\r\nReturn-path: $email";
						$subject="Message sent using your contact form";
						mail("youremail@yoursite.com", $subject, $message, $from);
						echo "<h2>Email sent!</h2>";
						}
					}  
				?>
	</body>
</html>
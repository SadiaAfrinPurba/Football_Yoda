<?php
  include_once 'scripts/configDb.php';
?>

<html>
	<head>
		<title>Sign Up</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<link rel="stylesheet" type="text/css"  href="css/login_style.css">
	</head>

	<body>
        <div id="modalReg" class="container">
		  <section class="element">
			  <h1>Register</h1>
			 
			  <form action="scripts/registerScript.php" method="POST">
				  <div class="loginWrapper">
					 <i class="fa fa-user"></i>
					  <input type="text" name="username" placeholder="Username" required/>
				  </div>
				  <div class="loginWrapper">
					  <i class="fa fa-lock"></i>
					  <input type="password" name="password" placeholder="Password" required/>
				  </div>
				  <div class="loginWrapper">
					  <i class="fa fa-lock"></i>
					  <input type="password" name="confirmPassword" placeholder="Confirm Password" required/>
				  </div>
				  <div>
					 <button type="submit" name="submit" value="Sign Up">Sign Up</button>
				  </div>
				  <label>
					   <input type="checkbox" value="Yes"/>
					   <span>I agree with the <a href="#">
						Terms &amp; Conditions</a></span>
				  </label>
			  </form>
		  </section>
		</div>
	</body>
</html>

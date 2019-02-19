
<html>
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/login_style.css">
	   <link rel="stylesheet" type="text/css" href="css/nav_style.css">
		
		
	</head>

	<body>
      <div id="modal" class="container">
		  <section class="element">
			  <h1>Login</h1>
			
			  <?php
			    if(isset($_SESSION['user_id'])){
					include 'logoutNav.php';
					session_start();
					echo '<form action="scripts/logoutScript.php" method="POST">
			              <button type="submit" name="submit" value="Logout" class="regH">Logout</button>
						  </form>';
				}
			    else{
					echo '<form action="scripts/loginScript.php" method="POST">
							  <div class="loginWrapper">
								 <i class="fa fa-user"></i>
								  <input type="text" name="username" placeholder="Username" required/>
							  </div>
							  <div class="loginWrapper">
								  <i class="fa fa-lock"></i>
								  <input type="password" name="password" placeholder="Password" required/>
							  </div>
							  <div>
								 <button type="submit" name="submit" value="Sign Up">Log In</button>
							  </div>
							  <div>
								   <a href="register.php">Forget your password?</a>
							  </div>
							  <label>
								   <input type="checkbox" value="Yes"/>
								   <span>Remember me</span>
							  </label>
						  </form>';
				}
			  ?>
			  
			
		  </section>
	  </div>
	</body>
</html>

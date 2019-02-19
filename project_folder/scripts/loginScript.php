<?php
  
	session_start();
	if(isset($_POST['submit'])){
		include 'configDB.php';
		$username=mysqli_real_escape_string($conn,$_POST['username']);
		$password=mysqli_real_escape_string($conn,$_POST['password']);
		if(empty($username) || empty($password)){
			header("Location: ../login.php?login=empty");
		    exit();
			
		}else{
			$sql="SELECT * FROM users WHERE username='$username'";
			$result=mysqli_query($conn,$sql);
			$resultCheck=mysqli_num_rows($result);
			if($resultCheck<1){
				header("Location: ../login.php?login=error");
		        exit();
			}else{
				if($row=mysqli_fetch_assoc($result)){
					$checkPwd=$row['password'];
					if($checkPwd!=$password){
						header("Location: ../login.php?login=wrong password");
		                exit();
					}
				    elseif($checkPwd==$password){
						$_SESSION['user_id']=$row['user_id'];
						$_SESSION['username']=$row['username'];
						$_SESSION['password']=$row['password'];
						
						header("Location: ../logoutNav.php?login=successful");
					}
				}
			}
				
		}

	}else{
		header("Location: ../login.php?login=error");
		exit();
	}


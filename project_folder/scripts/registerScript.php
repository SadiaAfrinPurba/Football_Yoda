<?php
 

  if(isset($_POST['submit'])){
	  include_once 'configDB.php';
	  $username=mysqli_real_escape_string($conn,$_POST['username']);
	  $password=mysqli_real_escape_string($conn,$_POST['password']);
	  $confirmPassword=mysqli_real_escape_string($conn,$_POST['confirmPassword']);
	  //Error Handling
	  
	  if(empty($username) || empty($password) || empty($confirmPassword)){
		   header("Location: ../register.php?signup=empty");
	       exit();
		  
	  }else{
		  if(!preg_match("/^[a-zA-Z]*$/",$username) || !preg_match("/^[a-zA-Z]*$/",$password) || !preg_match("/^[a-zA-Z]*$/",$confirmPassword)){
			header("Location: ../register.php?signup=invalid");
	        exit();  
		  }else{
		     
			  $sql="SELECT * FROM users WHERE user_id='$username'";
			  $result=mysqli_query($conn,$sql);
			  $resultCheck=mysqli_num_rows($result);
			  if($resultCheck>0){
				 header("Location: ../register.php?signup=usertaken");
	             exit(); 
			  }else{
				$sql="INSERT INTO users (username,password,confirmPassword) VALUES ('$username','$password','$confirmPassword')";
				$result=mysqli_query($conn,$sql);
				header("Location: ../login.php?signup=success");
	            exit(); 
				
			  }
		  }
		  
	  }
  }
  else{
	  header("Location: ../register.php?signup=error");
	  exit();
  }

?>
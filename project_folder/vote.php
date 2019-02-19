<?php
   include 'scripts/configDB.php';
   if(isset($_POST['poll'],$_POST['choice'])){
	   $poll=$_POST['poll'];
	   $choice=$_POST['choice'];
	   $sql=("INSERT INTO polls_answers (user,poll,choice)
	          SELECT ?,?,?
			  FROM polls 
			  WHERE EXISTS(
			     SELECT id
				 FROM polls
				 WHERE id=?)
			  and EXISTS(
			     SELECT id
				 FROM polls_choices
				 WHERE id=?)
			  and NOT EXISTS(
			     SELECT id
				 FROM polls_answers
				 WHERE user=?)
			  AND DATE(NOW()) BETWEEN polls.starts AND polls.ends
			  LIMIT 1;
			");
	 echo $sql;
	    $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
		 die('mysqli error: '.mysqli_error($conn));
	    }
   
		else{
			mysqli_stmt_bind_param($stmt,"sss",$choice);
			mysqli_stmt_execute($stmt);
			$result=mysqli_stmt_get_result($stmt);
			while($row=mysqli_fetch_assoc($result))
			{
				$polls[]=$row;


			}
		//$poll=$polls[0];
		print_r($poll);
	}
   }
?>


<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>

	</body>
</html>
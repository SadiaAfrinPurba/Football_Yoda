     <?php
		    
                    session_start();   
                
              ?>




<?php
    
    include_once 'scripts/configDB.php';
    $pollsQuery=("SELECT id,question FROM polls WHERE DATE(NOW()) BETWEEN starts AND ends");
    $pollsQuery=mysqli_query($conn,$pollsQuery);

    while($row=mysqli_fetch_assoc($pollsQuery)){
		$polls[]=$row;
	}

    $id=$polls[0];
    $poll=array();
    $pollQuery=("SELECT id,question FROM polls WHERE id=? AND DATE(NOW()) BETWEEN starts AND ends");

    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$pollQuery)){
		 die('mysqli error: '.mysqli_error($conn));
	}
   
    else{
		mysqli_stmt_bind_param($stmt,"s",strval($id));
		mysqli_stmt_execute($stmt);
		$result=mysqli_stmt_get_result($stmt);
		$poll=array();
		while($row=mysqli_fetch_assoc($result))
		{
			$polls[]=$row;
			

		}
		//$poll=$polls[0];
	}
       $poll=$polls[0];
       //print_r($poll);
	
    /*$pollQuery->execute(array(
		        'poll'=>$id
	));
    $poll=$pollQuery->fetchObject();
    print_r($poll);*/
    $choicesQuery=("SELECT polls.id, polls_choices.id AS choices_id, polls_choices.name
	                FROM polls
					JOIN  polls_choices
					ON polls.id = polls_choices.poll
					WHERE 
					DATE(NOW()) BETWEEN polls.starts AND polls.ends
	               ");
    $result=mysqli_query($conn,$choicesQuery);
    $choices=array();
    while($row=mysqli_fetch_assoc($result))
		{
			$choices[]=$row;
		    
		}
       //print_r($choices);
       

?>
          
<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
		<?php
		   
		 if(isset($_SESSION['user_id'])){
					include 'logoutNav.php';
				
					echo '<form action="scripts/logoutScript.php" method="POST">
			              <button type="submit" name="submit" value="Logout" class="regH"></button>
						  </form>';
				}
		
        else{ 
		                      include 'navigation.php';
		                  
		  <!--div for poll-->
		  
		       echo '<div class="poll">
			  <div class="poll-question">';?
				  <?php echo $poll['question']?>
				 <?php echo'<form action="vote.php" method="POST">
					<div class="poll-options">';?>
						<?php foreach($choices as $index=>$choice): ?>
						<?php echo '<div class="poll-option">
							<input type="radio" name="choice" value='?><?php echo '"';?><?php echo $choice['id']?><?php echo '" id="c';?><?php echo $index?><?php echo'"';?>
							<?php echo '<label for="c';?><?php echo $index?><?php echo'"';?><?php echo $choice['name']?><?php '</label>
						</div>';?>
						<?php endforeach;?>
						
					<?php echo '</div>
					<input type="submit" value="submit">
					<input type="hidden" name="poll" value="1">
				</form>
			  </div>
		  </div>';?>

			<?php
		       include 'footer.php';
		    ?>
	  
	
	   }
		
	</body>

</html>
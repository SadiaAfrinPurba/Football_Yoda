<?php
   include 'scripts/livescore_reader.php';
?>


<!doctype html>

<html>
	<head>
		<title>Live Score</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
		<?php
          include 'navigation.php';
        ?>
		<div>
			
		   <?php
		    foreach(fetch_livescore() as $articles){
			?>
		    <h3><a href="<?php echo $articles['guid'];?>"><?php echo $articles['title'];?></a></h3>
		     <p>
				<?php echo $articles['pubDate'];?>
                <br>
				<?php echo $articles['description'];?>
				
				
				 
		    </p>
		    <?php
		   }
		   ?>
		
		</div>
		<?php
          include 'footer.php';
        ?>    
		

	</body>
</html>
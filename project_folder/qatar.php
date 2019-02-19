<?php
  include 'scripts/fifa_news_reader.php';
?>



<!doctype html>

<html>
	<head>
		<title>Fifa Worldcup-Qatar 2022/title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
		<?php
          include 'navigation.php';
        ?>
		<div>
			
		   <?php
		    foreach(fetch_WorldCup2022() as $articles){
			?>
		    <h3><a href="<?php echo "http://www.fifa.com".$articles['link'];?>"><?php echo $articles['title'];?></a></h3>
		     <p>
				<?php echo $articles['pubDate'];?>
		    </p>
		    <img src="<?php echo $articles['enclosure']['url'];?>" alt="">
		    <p>
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
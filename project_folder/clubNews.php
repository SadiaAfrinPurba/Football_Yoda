<?php
  include 'scripts/fifa_news_reader.php';
?>



<!doctype html>

<html>
	<head>
		<title>Club News</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<link rel='shortcut icon' href='http://example.com/favicon.ico' type='image/x-icon'>
        <link rel='icon' href='http://example.com/favicon.ico' type='image/x-icon'>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/nav_style.css">
	</head>

	<body>
		<?php
          include 'navigation.php';
        ?>
		<div>
			
		   <?php
		    foreach(fetch_ClubNews() as $articles){
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
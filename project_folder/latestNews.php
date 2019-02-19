<?php
  include 'scripts/bbc_news_reader.php';
?>


<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<link rel='shortcut icon' href='http://example.com/favicon.ico' type='image/x-icon'>
        <link rel='icon' href='http://example.com/favicon.ico' type='image/x-icon'>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/nav_style.css">
		<style>
			.class{
				margin: 50px;
			}
		</style>
	</head>

	<body>
		   <div>
		      <?php
			    include 'navigation.php';
			  ?>
		  </div>
		   < class="news">
		   <?php
		    foreach(fetch_news() as $articles){
			?>
		    <h3><a href="<?php echo $articles['link'];?>"><?php echo $articles['title'];?></a></h3>
		     <p>
				<?php echo $articles['pubDate'];?>
		    </p>
		    <img src="<?php echo $articles['image']['url'];?>" alt="" width="100px" height="100px">
		    <p>
				<?php echo $articles['description'];?>
		    </p>
		    <?php
		   }
		   ?>
		   </div>
		     <div>
		      <?php
			    include 'footer.php';
			  ?>
		  </div>
	     
	
	</body>
</html>


<!DOCTYPE html>
<html>
		<head>
			<meta charset="UTF-8">
				<title>Gallery</title>
				<meta name="viewport" content="initial-scale=1.0">
				<link rel='shortcut icon' href='http://example.com/favicon.ico' type='image/x-icon'>
				<link rel='icon' href='http://example.com/favicon.ico' type='image/x-icon'>
				<link rel="stylesheet" href="css/style.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="css/nav_style.css">
		<style>
				div.gallery {
					margin: 5px;
					border: 1px solid #ccc;
					float: left;
					width: 280px;
					margin-left: 50px;
					margin-top:50px;

				}

				div.gallery:hover {
					border: 1px solid #777;
				}

				div.gallery img {
					width: 100%;
					height: auto;
				}

				div.desc {
					padding: 15px;
					text-align: center;
					color: white;
					font-family: sans-serif;
				}
				.fa{
			padding: 15px;
			font-size: 20px;
			width: 20px;
			text-align: center;
			text-decoration: none;
			margin: 5px 2px;
			border-radius: 50%;
	
		}
		.fa:hover{
			opacity: 0.7;
		}
		.fa-facebook{
			background: #3B5998;
			color: white;
		}
		.fa-twitter{
			background: #55ACEE;
			color: white;
		}
		.fa-google{
			background: #dd4b39;
			color: white;
		}
		</style>
		</head>
         <body>
	        <?php
			   include 'navigation.php';
			 ?>

			<div class="gallery">

				  <a target="_blank" href="img/gal-pic1.jpg">
					<img src="img/gal-pic1.jpg" alt="Messi and Anto" width="300" height="200">
			      </a>
			      <div class="desc">Lionel Messi married childhood sweetheart Antonella Roccuzzo at a star-studded ceremony on Friday.</div>
			</div>

			<div class="gallery">
				  <a target="_blank" href="img/gal-pic2.jpg">
					<img src="img/gal-pic2.jpg" alt="Ronaldo and Chile" width="600" height="400">
				  </a>
				  <div class="desc">Harry Kane Takes on James McArthur</div>
			</div>

			<div class="gallery">
				  <a target="_blank" href="img/gal-pic3.jpg">
					<img src="img/gal-pic3.jpg" alt="Northern Lights" width="600" height="400">
				  </a>
				  <div class="desc">The European Under-21 championships are set to kick off next Friday</div>
			</div>

			<div class="gallery">
				  <a target="_blank" href="img/gal-pic4.jpg">
					<img src="img/gal-pic4.jpg" alt="Mountains" width="600" height="400">
				  </a>
				  <div class="desc">Zlatan Ibrahimovic's departure from Manchester United </div>
			</div>
         
			
        </body>
</html>

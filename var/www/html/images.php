<!DOCTYPE html>
<html>
    <head>
		<title>Current Data</title>
	
		<style>		
		div.gallery {
		  margin: 5px;
		  border: 1px solid #ccc;
		  float: left;
		  width: 180px;
		}

		div.gallery img {
		  width:100%;
		  height:160px;
		}

		div.desc {
		  padding: 15px;
		  text-align: center;
		}
		</style>		
	</head>
    <body>		
		<center>
		<?php
			$nav = "index.php";
			include $nav;
		?>
		
		<h1>Images</h1>
		
		
		
		<?php
		// $dirname = "media/images/iconized/";
		// $images = glob($dirname."*.png");
		$images = glob("data/imgData/*.jpg");

		foreach($images as $image) {
			echo '<div class="gallery">';
				echo '<img src=' .$image. '><br />';
				echo '<div class="desc"> Annotation here </div>';
			echo '</div>';
		}
		?>

		
		</center>
    </body>
</html>

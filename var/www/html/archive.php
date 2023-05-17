<!DOCTYPE html>
<html>
    <head>
		<title>Current Data</title>
		<style>
			div.gallery {
				margin: 5px;
				float: left;
				width: 180px;
		}
		</style>
	</head>
    <body>		
		<center>
		<?php
			$nav = "index.php";
			include $nav;
		?>
		
		<h1>Archived Data</h1>
		
		
		
		<?php
		// $dirname = "data/Archive/";
		$data = glob("data/Archive/*.zip");

		foreach($data as $d) {
			$len_filepath = strlen("data/Archive/");
			$display = substr($d, $len_filepath);
			echo '<div class="gallery">';
				echo '<a href=' .$d.' > ' .$display. '</a> <br />';
			echo '</div>';
		}
		?>

		
		</center>
    </body>
</html>

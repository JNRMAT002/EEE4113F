<?php
	// If form is submitted
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$original_filename= "data/CSVData/readings.csv";
		$filename = "weight_readings.csv";
		
		// Telling browser to download file as CSV
		header('Content-Type: text/csv'); 
		header('Content-Disposition: attachment; filename="'.$filename.'";');
		
		readfile($original_filename);
		exit();
	}
?>

<!DOCTYPE html>
<html>
    <head>
		<title>Current Data</title>
	</head>
	<style>
	table, th, td {
		border: 1px solid black;
	}
	
	table {
		border-collapse: collapse;
	}
	
	th, td {
		padding: 15px;
	}
	
	td {
		text-align: center;
	}
	
	</style>
    <body>		
		<center>
		<?php
			$nav = "index.php";
			include $nav;
		?>
		
		<h1>Drongo Data</h1>

		<div>
			<?php
			$file_path = "data/CSVData/readings.csv";

			echo "<table>\n\n";
			//echo $data_path;
				// Open a file
				$file = fopen($file_path, "r");
			//echo $file;
				
				$col1 = "DateTime";
				$col2 = "Weight (g)";
				$col3 = "Temperature";
				$col4 = "Humidity";
				
				echo "<tr>";
					echo "<th>" . $col1 . "</th>";
					echo "<th>" . $col2 . "</th>";
					echo "<th>" . $col3 . "</th>";
					echo "<th>" . $col4 . "</th>";
				echo "</tr>";
				// Fetching data from csv file row by row
				while (($data = fgetcsv($file)) !== false) {
		  
					// HTML tag for placing in row format
					echo "<tr>";
					foreach ($data as $i) {
						echo "<td>" . htmlspecialchars($i) . "</td>";
					}
					echo "</tr> \n";
				}
		  
				// Closing the file
				fclose($file);
		  
				echo "\n</table>";

			?>
		</div>
		
		<div>
			<form action="" method="post">
				<input type="submit" value="Download CSV"  class="button">
			</form>
		</div>
		
		</center>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
	<style>
	    body {
  		background-color: lightblue;
	    }
	</style>
    </head>
    <body>
	<center>
	<h1>Drongo Data</h1>

	<?php
	$file_path = "SampleCSVFile_2kb.csv";

	echo "<html><body><table>\n\n";
  	//echo $data_path;
        // Open a file
        $file = fopen($file_path, "r");
  	//echo $file;
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
  
        echo "\n</table></body></html>";

	?>
	</center>
    </body>
</html>


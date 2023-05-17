<!DOCTYPE html>
<html>
	<head>
		<title>NavPage</title>
		<style>
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  border: 1px solid #e7e7e7;
		  background-color: #f3f3f3;
		}

		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}

		li a:hover:not(.active) {
		  background-color: #ddd;
		}

		li a.active {
		  color: white;
		  background-color: #000000;
		}
		</style>
	</head>
	<body>
		<ul>
		  <li><a href="home.php" target="_top">Current Data</a></li>
		  <li><a href="images.php" target="_top">Images</a></li>
		  <li><a href="archive.php" target="_top">Archive</a></li>
		</ul>
	</body>
</html>

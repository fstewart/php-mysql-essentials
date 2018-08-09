<?php 
	// load one time.
	// Notice that this is using the file system and not the URL.
	// Always use static strings in require functions for security.
	require_once('../../private/initialize.php'); 
?>

<!doctype html>

<html lang="en">
  <head>
    <title>GBI</title>
    <meta charset="utf-8">
    <!-- Using the Browser path and not the file path -->
    <link rel="stylesheet" media="all" href="../stylesheets/staff.css" />
  </head>

  <body>

  	<header>
  		<h1>GBI Staff Area</h1>
  	</header>

  	<navigation>
  		<ul>
  			<li><a href="index.php">Menu</a></li>
  		</ul>
  	</navigation>

  	<div id="content">

  	</div>

  	<footer>
  		&copy <?php echo date('Y'); ?> Globe Bank
  	</footer>
  </body>
</html>

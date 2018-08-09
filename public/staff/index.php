<?php 
	// load one time.
	// Notice that this is using the file system and not the URL.
	// Always use static strings in require functions for security.
	require_once('../../private/initialize.php'); 
?>
<?php 
	//Demonstration that variables are availble using PHP.
	$page_title = 'Staff Menu'; 
?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

	<div id="content">
		<div id="main-menu">
	    <h2>Main Menu</h2>
	    <ul>
	      <li><a href="<?php echo url_for('/staff/subjects/index.php'); ?>">Subjects</a></li>
	      <li><a href="<?php echo url_for('/staff/pages/index.php'); ?>">Pages</a></li>
	    </ul>
	  </div>

	</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>	
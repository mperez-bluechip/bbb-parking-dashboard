<?php
require_once('../../includes/initialize.php');
if (!$session->is_logged_in()) { redirect_to("login.php"); }
?>

<?php include_layout_template('admin_header.php'); ?>

	<h2 style=" width: 90%; color: #21b2a6; background: #ffffff; padding: 1% 1%;">Menu</h2>

	<?php echo output_message($message); ?>
	<ul>
		<li style="color: #ffffff; list-style: none; font-size: 2em;"><a href="list_photos.php">SPOTS LIST</a></li>
		<hr>
		<li style="color: #ffffff; list-style: none; font-size: 2em;"><a href="logout.php">LOGOUT</a></li>
	</ul>

<?php include_layout_template('admin_footer.php'); ?>

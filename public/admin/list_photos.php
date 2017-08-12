<?php require_once("../../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("login.php"); } ?>
<?php
  // Find all the photos
  $photos = Photograph::find_all();
?>
<?php include_layout_template('admin_header.php'); ?>
<a href="index.php">&larr;BACK</a>
<h2 style=" width: 90%; color: #21b2a6; background: #ffffff; padding: 1% 1%;">Photographs</h2>

<?php echo output_message($message); ?>
<table class="bordered">
  <tr>
    <th>Image</th>
    <th>Filename</th>
    <th>Caption</th>
    <th>Size</th>
    <th>Type</th>
		<th>&nbsp;</th>
  </tr>
<?php foreach($photos as $photo): ?>
  <tr>
    <td><img src="../<?php echo $photo->image_path(); ?>" width="100" /></td>
    <td><?php echo $photo->filename; ?></td>
    <td><?php echo $photo->caption; ?></td>
    <td><?php echo $photo->size_as_text(); ?></td>
    <td><?php echo $photo->type; ?></td>
		<td><a style="color: red;" href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete</a></td>
  </tr>
<?php endforeach; ?>
</table>
<br />
<a href="photo_upload.php">Upload a spot location</a>

<?php include_layout_template('admin_footer.php'); ?>

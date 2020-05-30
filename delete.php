<?php
 include'index.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	mysqli_query($cn, "DELETE FROM tasks WHERE id=$id");
	header('location: home.php');
}
?>
<?php
  include("db.php");  

	$id =$_REQUEST['BookID'];
	
	
	// sending query
	$sql = "DELETE FROM books WHERE BookID = '$id'";
	$result = $conn->query($sql); 	
	
	header("Location: index.php");
?>
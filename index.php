<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Books</title>
</head>
<body class="text-center">
<form method="post">
<table>

	<tr>
		<td>Title:</td>
		<td><input class="form-control" type="text" name="title" /></td>
	</tr>
	<tr>
		<td>Author</td>
		<td><input class="form-control" type="text" name="author" /></td>
	</tr>
	<tr>
		<td>Publisher Name</td>
		<td><input class="form-control" type="text" name="name" /></td>
	</tr>
	<tr>
		<td>Copyright Year</td>
		<td><input  class="form-control" type="text" name="copy" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" class="btn btn-primary" name="submit" value="add" /></td>
	</tr>
</table>
<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$title=$_POST['title'] ;
					$author= $_POST['author'] ;					
					$name=$_POST['name'] ;
					$copy=$_POST['copy'] ;

		$sql = "INSERT INTO `books`(Title,Author,PublisherName,CopyrightYear) 
		VALUES ('$title','$author','$name','$copy')";
		$result = $conn->query($sql);			
				
				
	        }
?>
</form>
<table border="1" class="table">
	
			<?php
			include("db.php");
			
				
			$sql = "SELECT * FROM books";
			$result = $conn->query($sql);

			while($row = $result->fetch_assoc())
			{
				$id = $row['BookID'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$row['BookID']."</font></td>";
				echo"<td><font color='black'>" .$row['Title']."</font></td>";
				echo"<td><font color='black'>". $row['Author']. "</font></td>";
				echo"<td><font color='black'>". $row['PublisherName']. "</font></td>";
				echo"<td><font color='black'>". $row['CopyrightYear']. "</font></td>";	
				echo"<td> <a href ='view.php?BookID=$id'>Edit</a>";
				echo"<td> <a href ='del.php?BookID=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			?>
</table>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
</body>
</html>

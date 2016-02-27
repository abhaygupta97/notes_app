<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$server = "localhost";
	$user = "root";
	$password = "ag97";
	$db = "note";
	$conn = new mysqli($server,$user,$password,$db);
	$h = $_POST['heading'];
	$e = $_POST['end'];
	$c = $_POST['content'];
	$s = $_POST['status'];
	$query = "INSERT INTO note (heading,end,content,status) Values ('$h','$e','$c','$s')";
	if($conn->query($query)){
		echo "added";
		header("refresh:0.1;url=note2.php");
		}
		else{
			echo "no";
		}
?>
</body>
</html>
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
	$i = $_POST['id'];
	$h = $_POST['heading'];
	$e = $_POST['end'];
	$c = $_POST['content'];
	$s = $_POST['status'];
	  if (isset($_POST['changes'])) {
	  		$query = "UPDATE note SET heading='$h' , end='$e' , content='$c' , status='$s' WHERE id='$i' ";
			if($conn->query($query)){
				echo "added";
				header("refresh:0.1;url=note2.php");
			}	
			else{
				echo "no";
			}
        
    	}
    else{
    	$query = "DELETE FROM note where id='$i' ";
    		if($conn->query($query)){
				echo "deleted";
				header("refresh:0.1;url=note2.php");
			}	
			else{
				echo "no";
			}
    }

?>
</body>
</html>
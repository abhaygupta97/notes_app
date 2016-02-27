<!DOCTYPE html>
<html>
<head>
	<title>Todo App</title>
	<style type="text/css">
			body{
					background-color: #cdffff;
				}

			fieldset{
					background-color: #ffffcc;
				}
			p{
					display: inline;
				}
			.display{
				background-color: #ffffcc;
				border: 2px solid black;
				padding: 10px;
				width: 45%;
				float: left;
				margin: 17px;
			}
	</style>
					
</head>
<body>
<form method="post" action="red.php">
	<fieldset>
	<legend style="color:blue ; text-align:center ; font-size: 30px">Enter new note</legend>
	<p>Heading: <input type="text" name="heading"></p> <br><br>
	<p>Due-date: <input type="date" name="end"></p> <br><br>
	<p>Status: <input type="radio" name="status" value="completed" > Completed 
			<input type="radio" name="status" value="not completed" checked> Not completed</p><br><br>
	<p>Content: </p><br><textarea rows="10" cols="40" name="content"></textarea> <br><br>
	<input type="submit" value="Create">
	</fieldset>
</form>
<br>
<br>
<div class="display">
	<h1 style="color:blue;text-align:center">Tasks to do</h1>
	<?php
	$server = "localhost";
	$user = "root";
	$password = "ag97";
	$db = "note";
	$conn = new mysqli($server,$user,$password,$db);
	$query = "SELECT * FROM note ORDER BY id DESC";
	if($result = $conn->query($query)){
		while($row = $result->fetch_assoc()){
			?>
			<form method="post" action="edit.php">
			<input type="text" name="id" value=" <?php echo $row['id'];?> " hidden>
			<p>Heading:</p>
			<input type="text" name="heading" value=" <?php echo $row['heading'];?> "><br><br>
			<p>Due-date:</p>
			<input type="date" name="end" value="<?php echo date('Y-m-d',strtotime($row['end'])) ?>"><br><br>
			<?php 
			if($row['status'] == "completed" ){
			echo "<p>Status: <input type='radio' name='status' value='completed' checked> Completed 
			<input type='radio' name='status' value='not completed' > Not completed</p><br><br>";
			}
			else
			{
			echo "<p>Status: <input type='radio' name='status' value='completed' > Completed 
			<input type='radio' name='status' value='not completed' checked> Not completed</p><br><br>";
			}
			?>
			<p>Content:</p>
			<input type="text" name="content" value=" <?php echo $row['content'];?> "><br><br>
			<input type="submit" name="changes" value="Save changes"> <input type="submit" name="delete" value="Delete">
			</form><br><br><hr><br>
			<?php
		}
	}
	else{
		echo "no";
	}
	?>
	</div>
	<div class="display">
	<h1 style="color:blue;text-align:center">Unfinished Tasks</h1>
	<?php
	$server = "localhost";
	$user = "root";
	$password = "ag97";
	$db = "note";
	$conn = new mysqli($server,$user,$password,$db);
	$query = "SELECT * FROM note WHERE status='not completed' ORDER BY end DESC";
	if($result = $conn->query($query)){
		while($row = $result->fetch_assoc()){
			?>
			<form method="post" action="edit.php">
			<input type="text" name="id" value=" <?php echo $row['id'];?> " hidden>
			<p>Heading:</p>
			<input type="text" name="heading" value=" <?php echo $row['heading'];?> "><br><br>
			<p>Due-date:</p>
			<input type="date" name="end" value="<?php echo date('Y-m-d',strtotime($row['end'])) ?>"><br><br>
			<?php 
			if($row['status'] == "completed" ){
			echo "<p>Status: <input type='radio' name='status' value='completed' checked> Completed 
			<input type='radio' name='status' value='not completed' > Not completed</p><br><br>";
			}
			else
			{
			echo "<p>Status: <input type='radio' name='status' value='completed' > Completed 
			<input type='radio' name='status' value='not completed' checked> Not completed</p><br><br>";
			}
			?>
			<p>Content:</p>
			<input type="text" name="content" value=" <?php echo $row['content'];?> "><br><br>
			<input type="submit" name="changes" value="Save changes"> <input type="submit" name="delete" value="Delete">
			</form><br><br><hr><br>
			<?php
		}
	}
	else{
		echo "no";
	}
	?>
</div>
</body>
</html>
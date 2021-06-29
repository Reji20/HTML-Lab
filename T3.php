<!DOCTYPE html>
<html>
<head>
	<style>
		body
		{
			background-color: pink;
			font-size: 15px;
		}
		table
		{
			background-color: lightblue;
			font-size: 20px;
		}
	</style>
</head>
<body>

</body>
</html>
<?php
$cc=mysqli_connect("localhost","root","","railway");
if($cc->connect_error)
{
	echo"connection failed";
}
else
{
	if(isset($_POST['s1']))
	{
		$a=($_POST['name']);
		$b=($_POST['address']);
		$c=($_POST['tno']);
		$d=($_POST['tname']);
		$e=($_POST['doj']);

     $q="INSERT INTO rail values('$a','$b','$c','$d','$e')";
     if($cc->query($q))
     {
     	echo"details saved";
     }
     else
     {
     	echo"invalid entry";
     }
	}
	if(isset($_POST['s2']))
	{
		$sql="SELECT name,tno,doj from rail";
		$result=$cc->query($sql);
		echo"<center><br><br><br>";
		echo"<table border='1'><caption>LIST OF ENTRIES</caption><tr>
		<td>Name</td>
		<td>Train.No</td>
		<td>Date of Journey</td></tr>";
		while($row=$result->fetch_assoc())
		{
			echo"<tr><td>".$row['name']."</td><td>".$row['tno']."</td><td>".$row['doj']."</td></tr>";
		}
		echo"</table>";
		echo"</center>";
		?>
		<a href="T2.php">back</a>
		<?php

	}
}

$cc->close();
?>
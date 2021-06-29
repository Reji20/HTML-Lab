<!DOCTYPE html>
<html>
<head>
	<style>
		body
		{
			background-color: pink;
			font-size: 15px;
		}
		h1
		{
			font-family: arial;
			background-color: yellow;
		}
		table
		{
			background-color: lightgreen;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<center><h1><u>Railway Ticket Details</u></h1>
	<form action="T3.php" method="POST" name="form2"><table border='2' height="50%" width="50%">
		<tr><th>Name</th><th><input type="text" name="name" id="name" required></th></tr>
		<tr><th>Address</th><th><textarea rows="5" cols="25" name="address" required></textarea></th></tr>
		<tr><th>Train.No</th><th><input type="number" name="tno" id="tno" required></th></tr>
		<tr><th>Train Name</th><th><input type="text" name="tname" id="tname" required></th></tr>
		<tr><th>Date of Journey</th><th><input type="date" name="doj" id="doj" required></th></tr>
		<tr><th><input type="submit" name="s1" value="save" onclick="return validate()"></th><th><input type="submit" name="s2" value="show details"></th></tr>
	</table>
</form>
</center>
		<script type="text/javascript">
			function validate()
			{
				var name=document.getElementById("name");
				var address=document.getElementById("address");
				var tno=document.getElementById("tno");
				
				if(!(name.value.match(/^[a-z A-Z]+$/)))
				{
					window.alert("Please enter a valid Name");
					return false;
				}
				if(!(address.value.match(/^[a-z A-Z]+$/)))
				{
					window.alert("Please enter a valid Address");
					return false;
				}
				if(!(tno.value.match(/^[0-9]+$/)))
				{
					window.alert("Please enter a valid Train number");
					return false;
				}
				return true;

			}
		</script>

</body>
</html>
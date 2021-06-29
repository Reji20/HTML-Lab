<?php
$cc=mysqli_connect("localhost","root","");
if($cc->connect_error)
{
	echo"connection unsuccessful";
}
else
{
	$db="CREATE DATABASE railway";
	if($cc->query($db)==true)
	{
		$cc=mysqli_connect("localhost","root","","railway");
	}
	$tb="CREATE TABLE rail(name varchar(25) not null,address varchar(25) not null,tno bigint,tname varchar(25) not null,doj date)";
	if($cc->query($tb))
	{
		echo"table created";
	}

}
$cc->close();
?>
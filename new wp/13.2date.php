<!DOCTYPE html>
<html> 
<head>
<title>PHP Date Format Exception Handling</title>
</head>
<body>
<h1>program to handle date format exception</h1> 
<form method="post">
Enter a Date: <input type="text" name="input"><br><br> 
<input type="submit" name="submit" value="Submit"> </form>
<?php
if($_POST)
{
$dt=$_POST['input'];
try {
	$date = new DateTime($dt);
} catch (Exception $e)
	{
echo "Invalid Date Format.<br/>Enter date in dd-mm-yyyy format"; 
exit(1);
}
echo "Valid date format.<br/>Date is ".$date->format('d-m-Y');
}
?>  
</body> 
</html>
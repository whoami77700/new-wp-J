<html>
<body>
<h1>Search Student Details based on RegNo and Grade</h1>
<form method="POST" action="">
Regno: <input type="text" name="txtreg"/> 
<input type="submit" value="Get Result">
Grade: <input type="text" name="txtgrd"/> 
<input type="submit" value="Get Result">
</form>
<?php
if ( $_POST)   
{
	$rg = $_POST['txtreg'];
	$grd = $_POST['txtgrd'];
	echo "$rg <br/>";
	echo "$grd<br/>";
	$con = mysqli_connect("localhost", "root","","student");
	if ($con) 
	echo "Successfully Connected.</br>";
	else {
echo "data base not found";
}
	$qry = "select * from result where rollno='$rg'";
	$result = mysqli_query($con, $qry);
	$nos = mysqli_num_rows($result);
	while ($row = mysqli_fetch_row($result))
	{
		echo "<br>\n";
		echo "rollno: $row[0] name: $row[1] mark: $row[2] grade: $row[3]";
	
	}
}
?>
</body>
</html>
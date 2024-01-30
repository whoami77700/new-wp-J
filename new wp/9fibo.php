<!DOCTYPE html>
<html>
<head>
 <title>program to find the fibonacci series</title>
</head>
<body>
<h1>program to find the fibonacci series</h1>
<form method="post">
Enter a number.<input type="text"name="input"><br><br>
<input type="submit"name="submit"value="Submit">
</form>
<?php
if(isset($_POST["submit"]))
{
$n=$_POST["input"];
$i=0;
$n1=0;
$n2=1;
echo"<h3>Fibonacci series for first $n numbers is:</h3>";
echo"\n";
echo $n1.' '.$n2.' ';
while($i<$n-2)
{
$n3=$n2+$n1;
echo $n3.' ';
$n1=$n2;
$n2=$n3;
$i=$i+1;
}
}
?>
</body>
</html>
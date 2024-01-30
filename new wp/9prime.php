<!DOCTYPE html>
<html>
<body>
<h1> PROGRAM TO generate prime numbers within a given range</h1>
<form method="post">
Enter first number:<input type="text" name="first"><br><br>
Enter second number:<input type="text" name="second"><br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
function primenumber($num)
{
$n=0;
 for($i=2;$i<=$num/2;$i++)
{
if($num%$i==0)
{
$n++;
break;
}
}
if($n==0)
{
echo $num." ";
}
}
if($_POST)
{
 $x=$_POST['first'];
 $y=$_POST['second'];
echo "Prime numbers between ".$x." and ".$y." are:\n";
for($i=$x;$i<=$y;$i++)
{
 primenumber($i);
}
}
?>
</body>
</html>
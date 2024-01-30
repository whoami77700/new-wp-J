<!DOCTYPE html>
<html>
<head>
<title>Zero Exe</title>
</head>
<body>
<h1>Program for Divide by Zero Exception Handling</h1>
<form method="post">
Enter the numerator: <input type="text" name="name"><br><br> 
Enter the denominator: <input type="text" name="dino"><br><br>
 <input type="submit" name="submit" value="Submit">
</form>
<?php
class DivideByZeroException extends Exception {};

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$numerator = $_POST['name']; 
$denominator = $_POST['dino'];

function divide($numerator, $denominator)
{
if ($denominator == 0)
{
throw new DivideByZeroException();
}
else if (($denominator == "") || ($numerator == ""))
{
throw new Exception();
}
else
{
return $numerator / $denominator;
}
}

try {
echo "<br> $numerator  $denominator=";
echo divide($numerator, $denominator);
}
catch (DivideByZeroException)
{
echo " Divide by zero exception!";
}
catch (Exception )
{
echo "<br>Dinominator or Numerator cannot be LEFT blank! Try Again....";
}
}
?>
</body>
</html>
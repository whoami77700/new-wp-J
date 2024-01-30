<html>
<head>
<title>pattern</title>
</head>
<body>
<h1>pattern</h1>
<form method="post">
enter a number:<input type="text"name="input"><br><br>
<input type="submit"name="submit"value="submit">
</form>
<center><b>
<?php
if($_POST)
{
$n=$_POST['input'];
for($i=$n;$i>=0;$i--)
{
for($j=1;$j<=$n-$i;$j++)
{
echo"&nbsp;&nbsp;";
}
for($k=1;$k<=$i;$k++)
{
echo"*&nbsp;&nbsp;";
}
echo"<br/>";
}
}
?>
</b>
</center>
</body>
</html>
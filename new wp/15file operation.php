<!DOCTYPE html>
<html> 
<head>
<title>PHP File create/write Example</title>
</head>
<body>
<h1>program to read and write file</h1>
<FORM method="POST">
<input type="submit" name="submit1" value="Read File"><br/><br/>
Enter String to write to file: <input type="text" name="name"> <br/> 
<br/>
<input type="submit" name="submit2" value="Write File">
</FORM>
<?php
if(isset($_POST['submit1']))
{
$filename = fopen( "hello.txt", "r");
if( $filename)
{
$filesize = filesize("hello.txt"); 
$filecontent = fread( $filename, $filesize); 
fclose($filename);
echo("File Name=hello.txt</br>");
echo ("File Content = $filecontent <br>"); 
echo ("File size: $filesize bytes");
}
else
{
echo "Error!! Try again";
}
}
if(isset($_POST['submit2']))
{
$myfile = fopen("hello.txt", "a");
$text = $_POST["name"];
fwrite($myfile, $text);
fclose($myfile);
}
?>
</body> 
</html>
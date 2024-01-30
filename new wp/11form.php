<!DOCTYPE HTML>
<html>
<head>
<style>
 .error {color: #FF0000;}
</style>
</head>
<body>
<?php
$nameErr = $emailErr = $genderErr=$websiteErr="";
$name = $email = $gender = $address = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
if (empty($_POST["name"]))
{
 $nameErr="Name is required";
}
else
{
 $name=test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
{
$nameErr = "Only letters and white space allowed";
}
}
if (empty($_POST["email"]))
{
$emailErr="Email is required";
}
else
{
$email=test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
$emailErr="Invalid email format";
}
}
if (empty($_POST["address"]))
{
$address="";
}
else
{ 
$address = test_input($_POST["address"]);
}
if (empty($_POST["gender"]))

{
 $genderErr="Gender is required";
}
else
{
$gender = test_input($_POST["gender"]);
}
}
function test_input($data)
{
$data= trim($data);
$data=stripslashes($data); 
$data= htmlspecialchars($data);
return $data;
}
?>

<h2>PHP Form Input Validation Example</h2>
<p><span class="error">*required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name:<input type="text" name="name" value="<?php echo $name;?>">
<span class="error">*<?php echo $nameErr;?></span>
<br><br>
E-mail:<input type="text" name="email" value="<?php echo $email;?>"> 
<span class="error">*<?php echo $emailErr;?></span>
<br><br>
Address: <textarea name="address" rows="5" cols="40"><?php echo $address;?></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class= "error" >* <?php echo $genderErr;?></span>
<br><br>
<input type ="submit" name="submit" value="Submit">
</form>
<?php
echo "<br><br><h2>Your Details Are:</h2>";
echo "Name: $name";
echo "<br>";
echo "Email: $email"; 
echo "<br>";

echo "Address: $address";
echo "<br>";
echo "Gender: $gender";
?>

</body>
</html>
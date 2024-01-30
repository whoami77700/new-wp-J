<DOCTYPE html>
<html>
<body>
<h1> PROGRAM TO CHANGE BG COLOR BASED ON DAY OF WEEK </h1>

<?php
$today=date("l");
print("$today");
$color=array('skyblue','white','red','yellow','blue','black');
if($today=="Sunday")
{
$bgcolor=$color[0];
}
elseif($today=="Monday")
{
$bgcolor=$color[1];
}
elseif($today=="Tuesday")
{
$bgcolor=$color[2];
}
elseif($today=="Wednesday")
{
$bgcolor=$color[3];
}elseif($today=="Thursday")
{
$bgcolor=$color[4];
}elseif($today=="Friday")
{
$bgcolor=$color[5];
}
else
{//only Saturday remains
$bgcolor=$color[6];
}
echo("<body bgcolor=\"$bgcolor\">\n");
print("</br>background color is $bgcolor");
?>
</body>
</html>
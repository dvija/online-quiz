<?php
require 'access.php';
?>

<html>
<head>
</head>
<body bgcolor="100760107023">

<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("onlinequiz",$con);

$u=$_SESSION['id'];

$qry="select name from registeruser where id='$u' ";
$cou=mysql_query($qry,$con);
while($row=mysql_fetch_array($cou))
{$x=$row["name"];
  
}
echo "<h1>"."<font color=white>"."Hello"."    "."<font color=red>"."$x"." !!!"; 

$con=mysql_connect("localhost","root","");

mysql_select_db("onlinequiz",$con);
$u=$_SESSION['id'];
$q="select score from registeruser where id='$u'";
$co=mysql_query($q,$con) or die("can't find");

while($row=mysql_fetch_array($co))
{$x=$row["score"];
echo "<center>"."<br>"."<br>"."<table>";
echo "<tr>"."<th bgcolor=yellow>"."<h1>"."<font color=red>";
echo "<pre>"."your score is        :"."</th>"."<th bgcolor=yellow>"."<h1>";
echo "<font color=red>"."$x"."</tr>"."</table>"."</center>";
}




?>
<br/><br/>

<center>
<form name="f1"  method="post" action="logout.php">
<input type="submit" value="logout">
</form>
</body>
</html>

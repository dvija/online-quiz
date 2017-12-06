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
?>


<form name="f1"  method="post" action="logout.php">
<h2><font color=cyan>If you don't want to play quiz  than . . . . . . . . . . . . . . . . . . . . . . . .                               <input type="submit" value="logout">
</form>
<center>
<h1><font color=yellow>
else select which quiz you want to play ?</h1>
<h2>
<br/>
<br/>
<form name="f1" method="post" action="gk.php">
<input type="submit" value="       GK test         " >
</form>
<br />

<form name="f2" method="post" action="maths.php">
<input type="submit" value="     maths test     " >
</form>
<br />

<form name="f3" method="post" action="science.php">
<input type="submit" value="    science test   " >
</form>
<br />

</h2>
</center>
</body>
</html>
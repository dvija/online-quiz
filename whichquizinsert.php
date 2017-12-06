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
<center>
<h1><font color=yellow>
select quiz in which you want to insert question . . . .</h1>
<h2>
<br/>
<br/>
<form name="f2"  method="post" action="logout.php">
<font color=cyan>
<h2>if you don't want to insert question than . . . . . . . . . . . . . . . . . . . . . . . .                               <input type="submit" value="logout">
</form>
<form name="f1" method="post" action="gkinsert.php">
<input type="submit" value="       GK test         " >
</form>
<br />

<form name="f2" method="post" action="mathsinsert.php">
<input type="submit" value="     maths test     " >
</form>
<br />

<form name="f3" method="post" action="scienceinsert.php">
<input type="submit" value="    science test   " >
</form>
<br />

</h2>
</center>
</body>
</html>
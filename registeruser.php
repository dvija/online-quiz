
<html>
<head>

</head>

<body bgcolor="1007601070">
<?php
$name=$_POST["name"];
$a=$_POST["gender"];
$b=$_POST["phone"];
$c=$_POST["id"];
$d=$_POST["pwd"];


$con=mysql_connect("localhost","root","");

mysql_select_db("onlinequiz",$con);

$qry="insert into registeruser values('$name','$a','$b','$c','$d','0')";
mysql_query($qry,$con) or die("can't create");

echo "<h1>"."<font color=silver>"."welcome"." "."<font color=yellow>".$name."<br/>"."</h1>";

?>

<center>

<h2><font color=cyan>
Now your data is store in the database. . . . . .
<br/>
</h2>
<h2><font color=cyan>
now you can login with your id & password ....
<br/><font color=cyan>
you  can play quiz . . . .
<br/><font color=cyan>
select play quiz option from right side and enjoy quiz
</h2>

</center>




</body>
</html>

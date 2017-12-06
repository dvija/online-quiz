<?php
require 'access.php';
?>

<html>
<head>
</head>
<body bgcolor=1007601070>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("onlinequiz",$con);


$qry="select questionid from quizquestion where quizid=3";
$cou=mysql_query($qry,$con);
while($row=mysql_fetch_array($cou))
{$x=$row["questionid"];
  
$count=$x;
}

$count=$count+1;




$question=$_POST["question"];
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];
$ans=$_POST["ans"];

$con=mysql_connect("localhost","root","");

mysql_select_db("onlinequiz",$con);

$qry="insert into quizquestion values('3','$count','$question','$a','$b','$c','$d','$ans') ";
mysql_query($qry,$con);


?>
<br/><br/><br/>
<h2>
<font color=cyan>
your question is sucessfully save . . . . . . . .
<h2/>
<form name="f2"  method="post" action="logout.php">
<h2>                       <input type="submit" value="logout">
</form>
</body>
</html>
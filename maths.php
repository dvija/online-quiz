<?php
require 'access.php';
?>
<html>
<head>
</head>

<?php


$con=mysql_connect("localhost","root","");
mysql_select_db("onlinequiz",$con);

$u=$_SESSION['id'];

$qry="select name from registeruser where id='$u' ";
$cou=mysql_query($qry,$con);
while($row=mysql_fetch_array($cou))
{$x=$row["name"];
  
}

echo "<h1>"."<b>"."<font color=yellow>".$x."</b>"." "."<font color=silver>"."your quiz will be start";
 ?>


<body bgcolor=1007601070>
<form name="f1" method="post" action="mathsanswercheck.php">
<h3><font color=red>
 ----here no negative marks.<br/>
 ----one question has 10 points.<br/><br/><br/><br/>

<?php



$con=mysql_connect("localhost","root","");

mysql_select_db("onlinequiz",$con);

$qry="select questionid,question,opta,optb,optc,optd from quizquestion where quizid=1";
$result=mysql_query($qry,$con);
while($row=mysql_fetch_array($result))
{$x=$row["questionid"];
echo "<table>";
 echo "<tr>";
echo "<td>"."<font color=yellow>"."<h3>";
echo  $row["questionid"]."  .  ".$row["question"];
echo  "</td>";
echo "</tr>"."</table>"."<table>";
echo "<tr>";
echo "<td>"."<h3>"."<font color=cyan> ";
echo "<input type=radio name=$x value=A>";
echo $row["opta"];
echo "</td>";
echo  "</tr>";
echo "<tr>"."<td>"."<font color=cyan>"."<h3>"."<input type=radio  name=$x value=B>".$row["optb"]."</td>"."</tr>";
echo "<tr>"."<td>"."<font color=cyan>"."<h3>"."<input type=radio  name=$x value=C>".$row["optc"]."</td>"."</tr>";
echo "<tr>"."<td>"."<font color=cyan>"."<h3>"."<input type=radio  name=$x value=D>".$row["optd"]."</td>"."</tr>";
echo "</table>";
echo "<br>"."<br>";
}



?>



<input type="submit"  value="submit">
</form>
</body>
</html>
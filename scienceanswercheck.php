<?php
require 'access.php';


?>


<html>
<head>
</head>

<body bgcolor=1007601070>

<?php
error_reporting(0);

$rans=0;
$attept=0;
$count=0;
$wrongans=0;

$con=mysql_connect("localhost","root","");
mysql_select_db("onlinequiz",$con);


$qry="select questionid from quizquestion where quizid=2";
$cou=mysql_query($qry,$con);
while($row=mysql_fetch_array($cou))
{$x=$row["questionid"];
  
$count=$x;
}


$i=1;
while($i<=$count)
{

$c=$_POST["$i"];


$q="select correct from quizquestion where quizid=2 and questionid=$i";
$co=mysql_query($q,$con) or die("can't find");

while($row=mysql_fetch_array($co))
{$x=$row["correct"];
   if($x==$c)
{
$rans=$rans+1;
}
else
{$rans=$rans;
$wrongans=$wrongans+1;
}


}

$i=$i+1;

}
$con=mysql_connect("localhost","root","");
mysql_select_db("onlinequiz",$con);

$u=$_SESSION['id'];

$qry="select name from registeruser where id='$u' ";
$cou=mysql_query($qry,$con);
while($row=mysql_fetch_array($cou))
{$x=$row["name"];
  
}
echo "<h1>"."<pre>"."<h2>"."<font color=white>"."player name         :"."<font color=red>".$x."<br>"."<br>"; 

echo "<center>";
echo "<table cellpaddings=80 cellspacing=20>"."<br>"."<br>";
$attempt=$wrongans+$rans;
$total=$attempt*10;
echo "<h1>";
$str="<pre>"."<font color=blue>"."Total marks are           :  ";
echo "<tr>"."<th bgcolor=cyan>"."<h1>".$str."</th> "."<th bgcolor=cyan>"."<h1>"."<font color=blue>".$total."</th>"."</tr>";


$str="<pre>"."<font color=blue>"."wrong answer is           :  ";

echo "<tr>"."<th bgcolor=yellow>"."<h1>". $str."</th> "."<th bgcolor=yellow>"."<h1>"."<font color=blue>".$wrongans."</th>"."</tr>";



$str="<pre>"."<font color=blue>"."correct answer is         :  ";
echo "<tr>"."<th bgcolor=cyan>"."<h1>".$str."</th> "."<th bgcolor=cyan>"."<h1>"."<font color=blue>".$rans."</th>"."</tr>";

$score=$rans*10;
$str="<pre>"."<font color=red>"."your score is             :  ";
echo "<tr>"."<th bgcolor=yellow>"."<h1>".$str."</th> "."<th bgcolor=yellow>"."<h1>"."<font color=red>".$score."</th>"."</tr>";
echo "</table>";
$u=$_SESSION['id'];


$con=mysql_connect("localhost","root","");

mysql_select_db("onlinequiz",$con);
$u=$_SESSION['id'];
$qry="update registeruser set score='$score' where id='$u'";

mysql_query($qry,$con);

?>

<form name="f1"  method="post" action="logout.php">
<input type="submit" value="logout">
</form>
</body>
</html>
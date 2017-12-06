<?php


$con=mysql_connect("localhost","root","");

mysql_select_db("onlinequiz",$con);

$qry="insert into quiz values('1','maths test')";
mysql_query($qry,$con);
$qry1="insert into quiz values('2','science test')";
mysql_query($qry1,$con);
$qry2="insert into quiz values('3','GK test')";

mysql_query($qry2,$con) or die("can't create");

?>
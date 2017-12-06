<?php



$con=mysql_connect("localhost","root","");

mysql_select_db("onlinequiz",$con);
$qry="create table quiz(quizid numeric(10) primary key,name varchar(30))";

mysql_query($qry,$con) or die("can't create");

?>

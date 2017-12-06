<?php



$con=mysql_connect("localhost","root","");

mysql_select_db("onlinequiz",$con);

$qry="create table quizquestion(quizid numeric(10) references quiz(quizid),questionid numeric(20),question varchar(200),opta varchar(60),optb varchar(60),optc varchar(60),optd varchar(60),correct varchar(10))";

mysql_query($qry,$con)
or die("can't create");



?>
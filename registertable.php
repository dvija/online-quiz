
<?php

$con=mysql_connect("localhost","root","");

mysql_select_db("onlinequiz",$con);

$qry="create table registeruser(name varchar(20),gender varchar(10),phone numeric(20),id varchar(20),password varchar(10),score numeric(20))";
mysql_query($qry,$con) or die("can't create");



$con=mysql_connect("localhost","root","");

mysql_select_db("onlinequiz",$con);

$qry="insert into registeruser values('admin','female','9088760876','123','123456','0') ";
mysql_query($qry,$con);

?>


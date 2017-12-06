<?php
$con=mysql_connect("localhost","root","");
$qry="create database onlinequiz";
mysql_query($qry,$con) or die("can't create");




?>

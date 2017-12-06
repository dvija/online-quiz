<?php
session_start();
$id=$_POST["id"];
$pwd=$_POST["pwd"];


$con=mysql_connect("localhost","root","");

mysql_select_db("onlinequiz",$con);
$qry="select * from registeruser where id='$id' and password='$pwd'";

$p=mysql_query($qry,$con);
$cnt=mysql_num_rows($p);
if($cnt==1)
{
$_SESSION['access']=1;
 $_SESSION['id']=$_POST["id"];
header("Location:displayresult.php");
}
else

header("location:resultlogin.html");



?>

<?php


$con=mysql_connect("localhost","root","");

mysql_select_db("onlinequiz",$con);

$qry="insert into quizquestion values('1','1','what is 2+3 ?','5','6','1','4','A')";
mysql_query($qry,$con);
$qry1="insert into quizquestion values('1','2','In this series .what number comes next? 4 12 20 28','32','34','36','40','C')";
mysql_query($qry1,$con);
$qry2="insert into quizquestion values('1','3','what is 12/2*2+4 ?','16','7','12','4','A')";
mysql_query($qry2,$con);
$qry3="insert into quizquestion values('1','4','In this series what number comes next? 2 4 8 16 32','33','48','40','64','D')";
mysql_query($qry3,$con);
$qry4="insert into quizquestion values('1','5','what is 16+3-4?','15','17','14','12','A')";
mysql_query($qry4,$con);
$qry="insert into quizquestion values('1','6','what is 4*15 ?','90','60','19','40','B')";
mysql_query($qry,$con);
$qry1="insert into quizquestion values('1','7','In this series .what number comes next? 3 9 27 ','30','33','81','57','C')";
mysql_query($qry1,$con);
$qry2="insert into quizquestion values('1','8','what is value of PI ?','3.14','3.4','3.41','3.1','A')";
mysql_query($qry2,$con);


$qry="insert into quizquestion values('2','1','who explore the telephone?','aedision','greham bel','newton','gelalio','B')";
mysql_query($qry,$con);
$qry="insert into quizquestion values('2','2','the finder of the airoplane is ________?','wrong brothers','right brothers', 'einstaine','aedanin','B')";
mysql_query($qry,$con);
$qry="insert into quizquestion values('2','3','the formula   E=________?','cm*m','m*c','m*c*c','c*c*m*m','C')";
mysql_query($qry,$con);
$qry="insert into quizquestion values('2','4','from which we get vitamin C  ?','orange','milk','carrot','watermelon','A')";
mysql_query($qry,$con);
$qry="insert into quizquestion values('2','5','which blood group can donet for O blood group ?','O','B','A','all','A')";
mysql_query($qry,$con);
$qry="insert into quizquestion values('2','6','from which we get oxygon?','tree','bell','TV','animal','A')";
mysql_query($qry,$con);
$qry="insert into quizquestion values('2','7','which one affect the ozon layer?','He','Co2', 'o2','H','B')";
mysql_query($qry,$con);
$qry="insert into quizquestion values('2','8','the founder of mercury is__________?','greham','madam victoria','merrry cyuri','madona','C')";
mysql_query($qry,$con);

$qry="insert into quizquestion values('3','1','which sign is use for dollar?','@','$','&','*','B')";
mysql_query($qry,$con);
$qry="insert into quizquestion values('3','2','which is the 5th planet in the solar system?','jupiter','mars','earth','neptune','A')";
mysql_query($qry,$con);
$qry="insert into quizquestion values('3','3','Who was the first presedent of india ?','b r ambedkar','c rajgopalachari','pandit nehru','rajendra prasad','D')";
mysql_query($qry,$con);
$qry="insert into quizquestion values('3','4','what is the holy book of islam?','mahabharat','kuran','bhagvatgeeta','bible','B')";
mysql_query($qry,$con);
$qry1="insert into quizquestion values('3','5','which is indias national flower?','merigold','lily','lotus','rose','C')";
mysql_query($qry1,$con);
$qry="insert into quizquestion values('3','6','the first ladies IPS officer in India?','shila bedi','kiran kher','kiran bedi','pratibha patil','C')";
mysql_query($qry,$con);
$qry="insert into quizquestion values('3','7','the founder of Rilance company?','dhirubhai ambani','mukesh ambani','Anil ambani','Ratan tata','A')";
mysql_query($qry,$con);
$qry="insert into quizquestion values('3','8','Ram belongs to _______ ?','avadh','kailash','rampur','ayodhya','D')";
mysql_query($qry,$con);

?>
<?php
require 'access.php';
?>

<html>
<head>
<script type="text/javascript">
function check()
{
var o1=document.getElementById("question").value;
var o2=document.getElementById("a").value;
var o3=document.getElementById("b").value;
var o4=document.getElementById("c").value;
var o5=document.getElementById("d").value;
var o6=document.getElementById("ans").value;

if(o1==""||o2==""||o3==""||o4==""||o5==""||o6=="")
{

alert("please enter all value");
 return false;



}

return true;

}
</script>
</head>
<body  bgcolor=1007601070>
<form name="f2"  method="post" action="logout.php">
<h2><font color=cyan>If you don't want to insert than . . . . . . . . . . . . . . . . . . . . . . . .                               <input type="submit" value="logout">
</form>

<center>

<form name="f1" method="post" action="ginsert.php" onsubmit="return check();">

<h3><font color=red>please enter all the values</h3>
<table>
<tr>
<td><font color=yellow>
Enter question:
</td>
<td><input type=text name="question" size=70>
</td>
</tr>
</table>
<br/>
<table>
<tr>
<td><font color=yellow>Enter option A:</td>
<td><input type="text" name="a" size=70>
</td>
</tr>


<td><font color=yellow>Enter option B:</td>
<td><input type="text" name="b" size=70>
</td>
</tr>
<td><font color=yellow>Enter option C:</td>
<td><input type="text" name="c" size=70>
</td>
</tr>
<td><font color=yellow>Enter option D:</td>
<td><input type="text" name="d" size=70>
</td>
</tr>
</table> 
<table>
<tr><td><font color=yellow>choose write option:</td>
<td><input type="radio" name="ans" value="A"><font color=red>A<input type="radio" name="ans" value="B"><font color=red>B
       <input type="radio" name="ans" value="C"><font color=red>C<input type="radio" name="ans" value="D"><font color=red>D
</td>
</tr>
</table> 


<br/>
<br/>  
<input type="submit"  value="save question">
</center>
</form>
</body>
</html>
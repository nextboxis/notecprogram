5.INTEGRATION TESTING
<html>
<head>
<title>INTEGRATION TESTING</title>
</head>
<body>
<?php
$con=mysql_connect('localhost','root','department');
if(!$con)
{
die("Could not connect the Database".mysql_error());
}
echo"Connection Successful<br>";
$select_db=mysql_select_db("test", $con);
if(!$select_db)
die("Could not connect to the Database: ".mysql_error());
if(isset($_POST['Submit']) && !empty($_POST['uname'])&&
!empty($_POST['pass']))
//print_r($_POST);
{
$name = $_POST['uname'];
$pass = $_POST['pass'];
$query = "SELECT * FROM login WHERE userName='$name' AND
 password='$pass";
$result=mysql_query($query);
$row=mysql_num_rows($result);
if ($row!=1){
echo "<h3 align='center'>INVALID USER NAME AND PASSWORD</h3>";
}else{
header("Location:checkLogin Welcome.php");
}
}
?>
<h3 align="center">INTEGRATION TESTING (LOGIN Module AS a Front
 End PHPMYADMIN As
Backend)</h3>
<form name="regform" action="" method="post">
<table width="50%" border $=^{\prime\prime}0"$ align="center" cellpadding $=^{\prime\prime}10^{\prime\prime}$
cellspacing $=^{\prime\prime}10^{\prime\prime}>$
<tr>
<td>USER NAME</td>
<td><input type="text" name="uname"></td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password" name="pass"></td>
</tr>
<tr>
<td align="right"><input type="submit" name="Submit"
 value="Submit"></td>
<td><input type="reset" name="reset"></td>
</tr>
</table>
</form>
</body> </html>

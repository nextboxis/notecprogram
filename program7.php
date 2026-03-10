7.SYSTEM TESTING
<html><head>
<title>System Testing</title>
</head><body>
<?php
$con = mysqli_connect("localhost","root","","ecomm");
if(!$con)
{ die("Could not connect to database: ".mysqli_connect_error());
}echo "Connection Successful <br>";
if(isset($_POST['submit']) && !empty($_POST['emailid']) &&
!empty($_POST['pass'])
)
{$email = $_POST['emailid'];
$pass = $_POST['pass'];
$query = "SELECT * FROM login WHERE emailid='$email' AND
 password='$pass";
$result = mysqli_query($con,$query);
$row = mysqli_num_rows($result);
if($row < 1){
echo "<h3 align='center'>Invalid Emailid and Password</h3>";
}else
{header("Location: checkloginwelcome.php");}
}?>
<h3 align="center">System Testing</h3>
<form name="regform" action="" method="post">
<table width="50%" border $=^{\prime\prime}0"$ align="center" cellpadding $=^{\prime\prime}10^{\prime\prime}$
 cellspacing $=^{\prime\prime}10^{\prime\prime}?$>
<tr>
<td>Email ID</td>
<td><input type="email" name="emailid" id="email"></td>
</tr><tr>
<td>Password</td>
<td><input type="password" name="pass"></td>
</tr><tr>
<td align="right">
<input type="submit" name="submit" value="Submit">
</td><td>
<input type="reset" name="reset" value="Reset">
</td></tr>
</table></form>
</body></html>

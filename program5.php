5.INTEGRATION TESTING
<html>
<head>
<title>INTEGRATION TESTING</title>
</head>
<body>
<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'test', 3307);
if (!$con) {
    die("Could not connect the Database: " . mysqli_connect_error());
}
echo "Connection Successful<br>";

if (isset($_POST['Submit']) && !empty($_POST['uname']) && !empty($_POST['pass'])) {
    $name = mysqli_real_escape_string($con, $_POST['uname']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $query = "SELECT * FROM login WHERE userName='$name' AND password='$pass'";
    $result = mysqli_query($con, $query);
    $row = mysqli_num_rows($result);
    if ($row != 1) {
        echo "<h3 align='center'>INVALID USER NAME AND PASSWORD</h3>";
    } else {
        header("Location: html2.php");
        exit;
    }
}
?>
<h3 align="center">INTEGRATION TESTING (LOGIN Module AS a Front End PHPMYADMIN As Backend)</h3>
<form name="regform" action="" method="post">
<table width="50%" border="0" align="center" cellpadding="10" cellspacing="10">
<tr>
<td>USER NAME</td>
<td><input type="text" name="uname"></td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password" name="pass"></td>
</tr>
<tr>
<td align="right"><input type="submit" name="Submit" value="Submit"></td>
<td><input type="reset" name="reset"></td>
</tr>
</table>
</form>
</body>
</html>

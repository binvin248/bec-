<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php session_start();?>
<?php
header('content-type:text/html;charset=utf-8');
header("Content-Type: text/html; charset=iso-8859-1");
ini_set("odbc.defaultlrl", "1000K");
$servername = "localhost";
$username   = "bec2018";
$password   = "becproject2018";
$db_name    = "bec";
// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
}
$ip=$_SERVER['REMOTE_ADDR'];
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
date_default_timezone_set('Asia/Manila'); // CDT
$date = date("Y-m-d H:i:s");
?>
<body>
</body>
</html>

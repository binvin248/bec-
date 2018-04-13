<?php
include_once('../pages/connect.php');

$divcode = $_POST['div_code'];
$divi = $_POST['divi'];

$sql = "INSERT INTO division (div_code, div_desc, status)
VALUES ('$divcode', '$divi', 1)";

if ($conn->query($sql) === TRUE) {
	$_SESSION['result'] = "Transaction Successful";
    header('location:../pages/division.php');
} else {
	$_SESSION['result'] = "Error: " . $sql . "<br>" . $conn->error;
	header('location:../pages/division.php');
}

$conn->close();
?>
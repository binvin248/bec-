<?php
include_once('../pages/connect.php');

$divcode = $_POST['divi'];
$deptcode = $_POST['deptcode'];
$dept = $_POST['dept'];

$sql = "INSERT INTO departments (div_code,code,name,status)
VALUES ('$divcode', '$deptcode', '$dept', 1)";

if ($conn->query($sql) === TRUE) {
	$_SESSION['result'] = "Transaction Successful";
    header('location:../pages/departments.php');
} else {
	$_SESSION['result'] = "Error: " . $sql . "<br>" . $conn->error;
	header('location:../pages/departments.php');
}

$conn->close();
?>
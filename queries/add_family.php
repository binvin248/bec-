<?php
include_once('../pages/connect.php');
$emp_id = $_GET['id'];
$spouse = $_POST['bec_spouse'];
$occ = $_POST['bec_occ'];
$emplo = $_POST['bec_emplo'];
$child = $_POST['bec_child'];
$father = $_POST['bec_father'];
$mother = $_POST['bec_mother'];

$sql = "INSERT INTO family 
VALUES ('$emp_id', '$spouse', '$occ', '$emplo', $child, '$father', '$mother')";

if ($conn->query($sql) === TRUE) {
	$_SESSION['result'] = "Transaction Successful";
    header('location:../pages/update_employee.php?id='.$emp_id);
} else {
	$_SESSION['result'] = "Error: " . $sql . "<br>" . $conn->error;
	header('location:../pages/update_employee.php?id='.$emp_id);
}

$conn->close();
?>
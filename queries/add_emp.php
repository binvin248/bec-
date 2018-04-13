<?php
include('../pages/connect.php');

echo $emp_id = $_POST['bec_ID'];
echo $title = $_POST['bec_title'];
echo $fname = $_POST['bec_fn'];
echo $mname = $_POST['bec_mn'];
echo $lname = $_POST['bec_ln'];
echo $ext = $_POST['bec_ext'];
echo $preadd = $_POST['bec_Preadd'];
echo $pretel = $_POST['bec_Pretel'];
echo $peradd = $_POST['bec_Peradd'];
echo $pertel = $_POST['bec_Pertel'];
echo $eadd = $_POST['bec_eadd'];
echo $mobile = $_POST['bec_mob'];
echo $bday = $_POST['bec_bday'];
echo $gender = $_POST['bec_gender'];
echo $age = $_POST['bec_age'];
echo $weight = $_POST['bec_weight'];
echo $height = $_POST['bec_height'];
echo $status = $_POST['bec_status'];
echo $religion = $_POST['bec_religion'];
echo $citizenship = $_POST['bec_citizenship'];
echo $bplace = $_POST['bec_bplace'];
echo $type = $_POST['bec_type'];
echo $phil = $_POST['bec_phil'];
echo $tin = $_POST['bec_tin'];
echo $sss = $_POST['bec_sss'];
echo $pagibig = $_POST['bec_pagibig'];
echo $empstatus = $_POST['a'];

echo $sql = "INSERT INTO employees 
VALUES ('$emp_id','$title','$fname','$lname','$mname','$ext','$gender','$mobile','$preadd','$pretel','$peradd','$pertel','$bday','$bplace','$eadd','$weight','$height','$religion','$status','$citizenship','$sss','$phil','$pagibig','$tin','$type','$empstatus','$date','$date')";
if ($conn->query($sql) === TRUE) {
	$_SESSION['result'] = "Transaction Successful";
    header('location:../pages/employees.php');
} else {
	$_SESSION['result'] = "Error: " . $sql . "<br>" . $conn->error;
	header('location:../pages/employees.php');
}

$conn->close();
?>
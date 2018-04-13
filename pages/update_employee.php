<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BEC HuRIS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/favicon.ico">
	<script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/gijgo.js" type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/gh/atatanasov/gijgo@1.8.0/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />




    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
<?php include_once('nav.php');?>
      <div class="page-content d-flex align-items-stretch">
<?php include_once('sidebar.php');
include_once('connect.php');
$emp_id = $_GET['id'];
?>
        <div class="content-inner">
          
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Tables            </li>
            </ul>
          </div>
          <section class="tables">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
				<!-- FORMS -->
<!--modal start-->
<!-- The Modal -->
<div class="modal fade" id="adddesigModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">New Designation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="../queries/add_desig.php?id=<?php echo $emp_id;?>" method="post">
        <label class="form-control-label">Department:</label>
		<select name="dept" class="form-control">
			<option value="" selected>Department</option>
			<?php 
			$sql = "SELECT * FROM departments where status=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
			?>
			<option value="<?php echo $row["code"];?>"><?php echo $row["name"];?></option>
	<?php } }?>
		</select>
		<label class="form-control-label">Status:</label>
		<select name="stat" class="form-control">
			<option value="" selected>Department</option>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <input type="submit" class="btn btn-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
</form>
    </div>
  </div>
</div>
<!--modal end-->
<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#personal">Personal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Designation">Designation</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#family">Family</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#education">Education</a>
    </li>
	   <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#eligibility">Eligibility/Qualification</a>
    </li>
	   <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#work">Work Experience</a>
    </li>
	   <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#training">Training</a>
    </li>
  </ul>

  <!-- Tab panes -->

  <div class="tab-content">
<div id="personal" class="container tab-pane active"><br>
<div class="row">
	<div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
						<a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
						</div>
						</div>
						<div class="card-header d-flex align-items-center">
							<h3 class="h4">Personal Data</h3>
						</div>
							<div class="card-body">

							<form method="post" action="../queries/add_emp.php">
							<div class="form-group">
								<label class="form-control-label">ID Number:</label>
								<input type="text"  name="bec_ID" class="form-control">
								<label class="form-control-label">Name:</label>
								<select name="bec_title" class="form-control">

									<option value="" selected>Title</option>
									<option value="Mr.">Mr.</option>
									<option value="Mrs.">Mrs.</option>
									<option value="Atty.">Atty.</option>
									<option value="Dr.">Dr.</option>
									<option value="Engr.">Engr.</option>
									</select>
								<input type="text" placeholder="Last Name" class="form-control" name="bec_ln">
								<input type="text" placeholder="First name" class="form-control" name="bec_fn">
								<input type="text" placeholder="Middle Name" class="form-control" name="bec_mn">

								<select name="bec_ext" class="form-control">

									<option value="" selected>Name Extensions</option>
									<option value="Jr.">Jr.</option>
									<option value="Sr.">Sr.</option>
									<option value="I">I</option>
									<option value="II">II</option>
									<option value="III">III</option>
									<option value="IV">IV</option>
									<option value="V">V</option>
									<option value="VI">VI</option>
									<option value="VII">VII</option>
									<option value="VIII">VIII</option>
									<option value="IX">IX</option>
									<option value="X">X</option>
									</select>
									</br>
									
									<div class="col-sm-12">
                            <div class="row">
							 <div class="col-md-9">
							  <label class="form-control-label">Present Address:</label>
                                <input type="text" placeholder=" " class="form-control" name="bec_Preadd">
                              </div>
                              <div class="col-md-3">
							  <label class="form-control-label">Tel. No.:</label>
                                <input type="text" placeholder=" " class="form-control" name="bec_Pretel">
                              </div>
                              
                            </div>
							</div>
							<div class="col-sm-12">
                            <div class="row">
							 <div class="col-md-9">
							  <label class="form-control-label">Permanent Address:</label>
                                <input type="text" placeholder=" " class="form-control" name="bec_Peradd">
                              </div>
                              <div class="col-md-3">
							  <label class="form-control-label">Tel. No.:</label>
                                <input type="text" placeholder=" " class="form-control" name="bec_Pertel">
                              </div>
                            </div>
							</div>
							</br>	
									<label class="form-control-label">Email Address:</label>
									<input type="text" class="form-control" name="bec_eadd">
									
									<label class="form-control-label">Mobile Number:</label>
									<input type="text" class="form-control" name="bec_mob">
									</br>
										
									<label class="form-control-label">Birthday:</label>
									<input id="datepicker" name="bec_bday"/>
									<script>
									$('#datepicker').datepicker({
									showOtherMonths: true});
									</script>
									</br>
									<label class="form-control-label">Gender:</label>
									<select name="bec_gender" class="form-control">
									<option value="" selected>Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									</select>
							 <div class="col-sm-12">
                            <div class="row">
							 <div class="col-md-4">
							  <label class="form-control-label">Age:</label>
                                <input type="text" placeholder=" " class="form-control" name="bec_age">
                              </div>
                              <div class="col-md-4">
							  <label class="form-control-label">Weight:</label>
                                <input type="text" placeholder=" " class="form-control" name="bec_weight">
                              </div>
                              <div class="col-md-4">
							  <label class="form-control-label">Height:</label>
                                <input type="text" placeholder=" " class="form-control" name="bec_height">
                              </div>
                            </div>
							</div>
							</br>
							<div class="col-sm-12">
                            <div class="row">
							 <div class="col-md-4">
							  <label class="form-control-label">Civil Status:</label>
                                <select name="bec_status" class="form-control">
									<option value="" selected>Status</option>
									<option value="Single">Single</option>
									<option value="Married">Married</option>
									<option value="Widow">Widow</option>
									</select>
                              </div>
                              <div class="col-md-4">
							  <label class="form-control-label">Religion:</label>
                                <input type="text" placeholder=" " class="form-control" name="bec_religion">
                              </div>
                              <div class="col-md-4">
							  <label class="form-control-label">Citizenship:</label>
                                <input type="text" placeholder=" " class="form-control" name="bec_citizenship">
                              </div>
                            </div>
							</div>
							</br>							
									<label class="form-control-label">Birthplace:</label>
								<input type="text"  class="form-control" name="bec_bplace">

									</div>
									</div>
									</div>
									</div>

				<div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
						<a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
						</div>
						</div>
						<div class="card-header d-flex align-items-center">
							<h3 class="h4"> </br></h3>
						</div>
							<div class="card-body">

							<div class="form-group">

							<label class="form-control-label">Status</label>
                          <div class="col-sm-9">
                            <input id="fileInput" type="file" class="form-control-file">
                          </div>
                        </br>
                        <label class="form-control-label">Employment Type:</label>
        								<select name="bec_type" class="form-control">

        									<option value="" selected>Type</option>
        									<option value="Part Time">Part Time</option>
        									<option value="Full Time">Full Time</option>
        									<option value="Contractual">Contractual</option>
        									<option value="Substitute">Substitute</option>
        									</select>
						  
							<label class="form-control-label">Status</label>
							<div class="i-checks">
                              <input id="radioCustom1" type="radio" value="In Service" name="a" class="radio-template">
                              <label for="radioCustom1">In Service</label>
                            </div>
							<div class="i-checks">
                              <input id="radioCustom2" type="radio" value="Retired" name="a" class="radio-template">
                              <label for="radioCustom2">Retired</label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom3" type="radio" value="Resigned" name="a" class="radio-template">
                              <label for="radioCustom3">Resigned</label>
                            </div>
							<div class="i-checks">
                              <input id="radioCustom3" type="radio" value="End of Contract" name="a" class="radio-template">
                              <label for="radioCustom3">End of Contract</label>
                            </div>
							<div class="i-checks">
                              <input id="radioCustom3" type="radio" value="No Load" name="a" class="radio-template">
                              <label for="radioCustom3">No Load</label>
                            </div>

								<label class="form-control-label">Philhealth Number:</label>
								<input type="text"  class="form-control"  name="bec_phil">
								<label class="form-control-label">TIN Number:</label>
								<input type="text"  class="form-control" name="bec_tin">
								<label class="form-control-label">SSS Number</label>
								<input type="text"  class="form-control" name="bec_sss">
								<label class="form-control-label">PAGIBIG Number</label>
								<input type="text"  class="form-control" name="bec_pagibig">
								</br>
<input type="submit" value="SUBMIT" class="btn btn-primary">
									</div>
									</form>
									</div>
									</div>
									</div>

									</div>
</div>
<div id="family" class="container tab-pane fade"><br>
	<div class="row">
	<div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
						<a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
						</div>
						</div>
						<div class="card-header d-flex align-items-center">
							<h3 class="h4">Family Data</h3>
						</div>
							<div class="card-body">

							<form method="post" action="../queries/add_family.php?id=<?php echo $emp_id;?>">
							<div class="form-group">
								<label class="form-control-label">Name of Spouse:</label>
								<input type="text"  name="bec_spouse" class="form-control">
								<label class="form-control-label">Occupation:</label>
								<input type="text"  name="bec_occ" class="form-control">
								<label class="form-control-label">Employer:</label>
								<input type="text"  name="bec_emplo" class="form-control">
								<label class="form-control-label">No. of Children:</label>
								<input type="number"  name="bec_child" class="form-control" min="0">
								<label class="form-control-label">Father's Name:</label>
								<input type="text"  name="bec_father" class="form-control">
								<label class="form-control-label">Mother's Maiden Name:</label>
								<input type="text"  name="bec_mother" class="form-control">
									</div>
									<input type="submit" value="SUBMIT" class="btn btn-primary">
									</form>
									</div>
									</div>
									</div>
									</div>
									</div>
									
									
									<div id="Designation" class="container tab-pane fade"><br>
	<div class="row">
	<div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
						<a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
						</div>
						</div>
						<div class="card-header d-flex align-items-center">
							<h3 class="h4">Designation</h3>
						</div>
							<div class="card-body">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Position</th>
                <th>Department</th>
                <th>Status</th>
                <th><center>Edit</center></th>
                <th><center>Delete</center></th>
            </tr>
        </thead>
        <tbody>
        <?php 
			$sql1 = "SELECT * FROM employees";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
    	$emp_id = $row1["id"];
    	$title = $row1["title"];
    	$fname = $row1["first_name"];
    	$mname = $row1["middle_name"];
    	$lname = $row1["last_name"];
    	$ext = $row1["ext"];
    	$fullname = $title." ".$fname." ".$mname." ".$lname." ".$ext;
    	$status = $row1["status"];
			?>
            <tr>
                <td><?php echo $emp_id; ?></td>
                <td><?php echo $fullname;?></td>
                <td><?php echo "";?></td>
                <td><?php echo "";?></td>
                <td><center><div class="tooltip"><a href="update_employee.php?id=<?php echo $emp_id;?>"><i class="fa fa-edit fa-lg"></i></a><span class="tooltiptext">Modify this record</span></div></center></td>
                <td><center><div class="tooltip"><a href="delete.php"><i class="fa fa-trash fa-lg"></i></a><span class="tooltiptext">Delete this record</span></div></center></td>
            </tr>
            <?php
            } } 
            ?>
            <tr>
                <td colspan="6"><center><a href="">Add New Record</a></center></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Position</th>
                <th>Department</th>
                <th>Status</th>
                <th><center>Edit</center></th>
                <th><center>Delete</center></th>
            </tr>
        </tfoot>
    </table>
							
							
									</div>
									</div>
									</div>
									</div>
									</div>
									
    </div>
				<!--FORMS END -->


                </div>
                <div class="col-lg-6">



                </div>
              </div>
            </div>
          </section>
          <?php include_once('footer.php');?>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="../js/front.js"></script>
  </body>
</html>

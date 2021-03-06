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
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap4.min.css">
        <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap4.css">
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

<link rel="stylesheet" href="../vendor/bootstrap/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../vendor/bootstrap/css/buttons.bootstrap4.min.css">




    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
<?php include_once('nav.php');
include_once('connect.php');?>
      <div class="page-content d-flex align-items-stretch">
<?php include_once('sidebar.php');
include_once('result.php');?>

<!--modal start-->
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">New Employee</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="../queries/add_department.php" method="post">
        <label class="form-control-label">Division:</label>
		<select name="divi" class="form-control">
			<option value="" selected>Division</option>
			<?php 
			$sql = "SELECT * FROM division where status=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
			?>
			<option value="<?php echo $row["div_code"];?>"><?php echo $row["div_desc"];?></option>
	<?php } }?>
		</select>
		<label class="form-control-label">Department Code:</label>
		<input type="text"  name="deptcode" class="form-control">
		<label class="form-control-label">Department:</label>
		<input type="text"  name="dept" class="form-control">
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


        <div class="content-inner">

          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Employee           	 </li>
            </ul>
          </div>
          <section class="tables">
            <div class="container-fluid">
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
                                <h3 class="h4"><div class="tooltip"><a href="index.php"><i class="fa fa-plus fa-2x"></i></a><span class="tooltiptext">Add new record</span></div></h3>
                              </div>
                                <div class="card-body">

                                <form>
                                <div class="form-group">
                                  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Position</th>
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
                <td><?php echo $status;?></td>
                <td><center><div class="tooltip"><a href="update_employee.php?id=<?php echo $emp_id;?>"><i class="fa fa-edit fa-lg"></i></a><span class="tooltiptext">Modify this record</span></div></center></td>
                <td><center><div class="tooltip"><a href="delete.php"><i class="fa fa-trash fa-lg"></i></a><span class="tooltiptext">Delete this record</span></div></center></td>
            </tr>
            <?php
            } } 
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Position</th>
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
    
    <!--datatable files-->
    <script src="../vendor/bootstrap/js/jquery-1.12.4.js"></script>
    <script src="../vendor/bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/bootstrap/js/dataTables.bootstrap4.min.js"></script>
    <script src="../vendor/bootstrap/js/dataTables.buttons.min.js"></script>
    <script src="../vendor/bootstrap/js/buttons.bootstrap4.min.js"></script>
    <script src="../vendor/bootstrap/js/jszip.min.js"></script>
    <script src="../vendor/bootstrap/js/pdfmake.min.js"></script>
    <script src="../vendor/bootstrap/js/vfs_fonts.js"></script>
    <script src="../vendor/bootstrap/js/buttons.html5.min.js"></script>
    <script src="../vendor/bootstrap/js/buttons.print.min.js"></script>
    <script src="../vendor/bootstrap/js/buttons.colVis.min.js"></script>
    <!-- Main File-->
    <!--<script src="../js/front.js"></script>-->
    <script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],
            "columnDefs": [
    { "width": "8%", "targets": 5 },
    { "width": "8%", "targets": 6 }
  ]
        } );

        table.buttons().container()
            .appendTo( '#example_wrapper .col-md-6:eq(0)' );
    } );
    
    </script>
  </body>
</html>

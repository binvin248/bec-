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
<?php include_once('nav.php');?>
      <div class="page-content d-flex align-items-stretch">
<?php include_once('sidebar.php');?>

        <div class="content-inner">

          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Name extensions           	 </li>
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
                                <h3 class="h4">&nbsp;</h3>
                              </div>
                                <div class="card-body">

                                <form>
                                <div class="form-group">
                                  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name extension</th>
                <th><center>Edit</center></th>
                <th><center>Delete</center></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td><center><div class="tooltip"><a href="edit.php"><i class="fa fa-edit fa-lg"></i></a><span class="tooltiptext">Modify this record</span></div></center></td>
                <td><center><div class="tooltip"><a href="delete.php"><i class="fa fa-trash fa-lg"></i></a><span class="tooltiptext">Delete this record</span></div></center></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name extension</th>
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
    { "width": "8%", "targets": 1 },
    { "width": "8%", "targets": 2 }
  ]
        } );

        table.buttons().container()
            .appendTo( '#example_wrapper .col-md-6:eq(0)' );
    } );
    
    </script>
  </body>
</html>

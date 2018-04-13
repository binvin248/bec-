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
<?php include_once('sidebar.php');?>
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
<!-- Nav tabs -->  



  <!-- Tab panes -->

  <div class="tab-content" >
<div id="personal" class="container tab-pane active" style="background: #fff; border: 1px solid #dee2e6; -webkit-border-radius: 20px;
-webkit-border-top-left-radius: 20px;
-moz-border-radius: 20px;
-moz-border-radius-topleft: 20px;
border-radius: 20px;
border-top-left-radius: 20px;"><br>
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
						
							<div class="card-body">

							<form>
							<div class="form-group">
							<div class="col-sm-12">
                            <div class="row">
							 <div class="col-md-2">
							  <label class="form-control-label">ID #:</label>
                                <input type="text"  name="bec_ID" class="form-control">
								
								
							
									<label class="form-control-label">Mobile #:</label>
									<input type="text" class="form-control" name="bec_add">
									
									<label class="form-control-label">Email Address:</label>
									<input type="text" class="form-control" name="bec_add">
									
									<label class="form-control-label">Gender:</label>
									
									<div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">Male</label>
                            </div>
							<div class="i-checks">
                              <input id="radioCustom2" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom2">Female</label>	
                            </div>
									
                              </div>
							  
                              <div class="col-md-6">
							  <label class="form-control-label">Name</label>
							  <select name="bec_title" class="form-control">
                                <option value="" selected>Title</option>
									<option value="Jr.">Mr.</option>
									<option value="Jr.">Mrs.</option>
									<option value="Jr.">Atty.</option>
									<option value="Jr.">Dr.</option>
									<option value="Jr.">Engr.</option>
									</select>
									
								<input type="text" placeholder="Last Name" class="form-control" name="bec_ln">
								
								<input type="text" placeholder="First name" class="form-control" name="bec_fn">
								
								<input type="text" placeholder="Middle Name" class="form-control" name="bec_mn">
								&nbsp;

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
									
									<label class="form-control-label">Birthday:</label>
									<input id="datepicker" name="bec_mn"/>
									<script>
									$('#datepicker').datepicker({
									showOtherMonths: true});
									</script>
							
                              </div>
                              <div class="col-md-4">
							  <label class="form-control-label">Picture</label>
                          <div class="col-sm-9">
                            <input id="fileInput" type="file" class="form-control-file">
                          </div>
                        </br>
                        <label class="form-control-label">Employment Type:</label>
        								<select name="bec_type" class="form-control">

        									<option value="" selected>Type</option>
        									<option value="Jr.">Part Time</option>
        									<option value="Jr.">Full Time</option>
        									<option value="Jr.">Contractual</option>
        									<option value="Jr.">Substitute</option>
        									</select>
											
											<label class="form-control-label">Status</label>
							<div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">In Service</label>
                            </div>
							<div class="i-checks">
                              <input id="radioCustom2" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom2">Retired</label>
                            </div>
							<div class="i-checks">
                              <input id="radioCustom3" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom3">Retired / End of Contract</label>
                            </div>
							<div class="i-checks">
                              <input id="radioCustom3" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom3">No Load</label>
                            </div>
                              </div>
                            </div>
							</div>
							
							<div class="col-sm-12">
                            <div class="row">
							 <div class="col-md-6">
							  <label class="form-control-label">Present Address:</label>
                                <input type="text" placeholder=" " class="form-control">
								<label class="form-control-label">Permanent Address:</label>
                                <input type="text" placeholder=" " class="form-control">
								
								<label class="form-control-label">Birthplace:</label>
                                <input type="text" placeholder=" " class="form-control">
								<label class="form-control-label">Citizenship:</label>
                                <input type="text" placeholder=" " class="form-control">
								
                              </div>
                              <div class="col-md-2">
							  <label class="form-control-label">Tel. No.:</label>
                                <input type="text" placeholder=" " class="form-control">
								 <label class="form-control-label">Tel. No.:</label>
                                <input type="text" placeholder=" " class="form-control">
								<label class="form-control-label">Civil Status:</label>
                                <input type="text" placeholder=" " class="form-control">
								<label class="form-control-label">Religion:</label>
                                <input type="text" placeholder=" " class="form-control">
								<label class="form-control-label">Height:</label>
                                <input type="text" placeholder=" " class="form-control">
								 
                              </div>
                              
							  <div class="col-md-4">
							  <label class="form-control-label">Philhealth Number:</label>
								<input type="text"  class="form-control">
								<label class="form-control-label">TIN Number:</label>
								<input type="text"  class="form-control">
								<label class="form-control-label">SSS Number</label>
								<input type="text"  class="form-control">
								<label class="form-control-label">PAGIBIG Number</label>
								<input type="text"  class="form-control">
								<label class="form-control-label">Weight:</label>
                                <input type="text" placeholder=" " class="form-control">
                              </div>
                            </div>
							</div>
                                  <input type="submit" value="SUBMIT" class="btn btn-primary">
                                    </div>
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

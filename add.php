<?php
  // $id = $_GET['id'];
  // echo $id;

include('dbcon.php');

  if (isset($_POST['submit'])) {

  	  $id = $_GET['id'];
  	$item = $_POST['item'];

  	mysqli_query($connect, "INSERT INTO item_tb(item,class_id) VALUES ('$item','$id')");
  	echo "<h3 style='color:green;'>Item succesfully added</h3>";

  }
?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Team Priapus Mini-Classroom</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- inbox style -->
	<link href="assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="assets/css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="dashboard.html">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">Priapus</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<!-- <div class="top-menu">
					<ul class="nav navbar-nav pull-right"> -->
						<!-- start manage user dropdown -->
						<!-- <li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<img alt="" class="img-circle " src="../assets/img/dp.jpg" />
								<span class="username username-hide-on-mobile">Festus</span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="user_profile.html">
										<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="login.html">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li> -->
						<!-- end manage user dropdown -->
					<!-- </ul> -->
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<!-- <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li> -->
							<!-- <li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="../assets/img/dp.jpg" class="img-circle user-img-circle"
											alt="User Image" />
									</div>
									<div class="pull-left info">
										<p>New User</p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
									</div>
								</div>
							</li> -->
							<!-- <li class="nav-item start active open">
								<a href="dashboard.html" class="nav-link">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"></span>
								</a>
							</li> -->
							<!-- <li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
									<span class="title">Teacher</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_teacher.html" class="nav-link "> <span class="title">All
												Teacher</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_teacher.html" class="nav-link "> <span
												class="title">Add Teacher</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="teacher_profile.html" class="nav-link "> <span class="title">About
												Teacher</span>
										</a>
									</li>
								</ul>
							</li> -->
							<!-- <li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
									<span class="title">Students</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_students.html" class="nav-link "> <span class="title">All
												Students</span>
										</a>
									</li>
									
									<li class="nav-item">
										<a href="add_student.html" class="nav-link "> <span class="title">Add
												Student</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="student_profile.html" class="nav-link "> <span class="title">About
												Student</span>
										</a>
									</li>
								</ul>
							</li> -->
							<!-- <li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Classes</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_classes.html" class="nav-link "> <span class="title">All
												Classes</span>
										</a>
									</li>
									
									<li class="nav-item">
										<a href="add_class.html" class="nav-link "> <span class="title">Add
												Class</span>
										</a>
									</li>
									
									<li class="nav-item">
										<a href="class_details.html" class="nav-link "> <span class="title">About Class</span>
										</a>
									</li>
								</ul>
							</li> -->
						<!-- </ul> -->
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add item</div>
								<a href="index.html" class="text-primary"><h5><b>Home</b></h5></a>
							</div>
							<!-- <ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="dashboard.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Class</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Create Class</li>
							</ol> -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Add item</header>
								</div>
								<div class="card-body" id="bar-parent">
									<form  method="post" id="form_sample_1" class="form-horizontal">
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">Add item to this class 
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<textarea placeholder="Add your class note here" name="item" rows="20" cols="40">
			
														</textarea><br>
												</div>
											</div>
											<!-- <div class="form-group row">
												<label class="control-label col-md-3">Course Details
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<textarea name="address" placeholder="course details"
														class="form-control-textarea" rows="5"></textarea>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Starting Date
													<span class="required"> * </span>
												</label>
												<div class="input-append date" id="dp1">
													<input class="formDatePicker" placeholder="Starting Date" size="44"
														type="text" readonly>
													<span class="add-on"><i class="fa fa-calendar"></i></span>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Course Duration
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="csuration" placeholder="Course Duration"
														class="form-control input-height" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Teacher's Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="teachername" placeholder="enter teacher's name"
														class="form-control input-height" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Maximum Students
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="maxstud" placeholder="Maximum Students"
														class="form-control input-height" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Contact No.
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input name="number" type="text" placeholder="Contact Number"
														class="form-control input-height" /> </div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Course Picture
												</label>
												<div class="compose-editor">
													<input type="file" class="default" multiple>
												</div>
											</div> -->
											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="submit" class="btn btn-info m-r-20" name="submit">Submit</button>
													</div>
												</div>
											</div>
										</div>
									</form>
									<div class="col-md-9 offset-md-3">
									<a href="index.html"><button type="" class="btn btn-info m-r-20" name="submit">Log-out</button></a>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2019 &copy; Team Priapus</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script src="../assets/plugins/jquery-validation/js/additional-methods.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
	<script src="../assets/plugins/bootstrap-datepicker/datepicker-init.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/pages/validation/form-validation.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!-- end js include path -->
</body>

</html>
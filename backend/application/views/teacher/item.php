<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Create Item</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?= base_url()?>index.php/teacher_es/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Class</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Create Class</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
                                
								<div class="card-body" >

									<form action="" method="post" class="form-horizontal"  enctype="multipart/form-data">
                                        <?php if (isset($_SESSION["success"])) { ?>
                                        <?php echo $_SESSION["success"]; ?>
                                        <?php } ?>

                                        <?php if (isset($_SESSION['error'])) { ?>
                                            <?php echo $_SESSION['error']; ?>
                                        <?php } ?>
                                       <center> <strong><p style="color:red;"> <?php echo validation_errors(); ?> </p> </strong> </center>

										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">Item Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-9">
													<input type="text" name="item_name" placeholder="Enter item name"
														class="form-control input-height" />
												</div>
											</div>
                                            <div class="form-group row">
												<label class="control-label col-md-3">Class
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="class_id" required>
														<option value="">Select Class ...</option>
                                                       <?php foreach($item as $key => $item):?>
														<option value="<?= $item->id?>"><?= $item->class_name;?></option>
														<?php  endforeach;?>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Item Details
													<span class="required"> * </span>
												</label>
												<div class="col-md-9">
													<textarea name="item_content" placeholder="Items details"
														class="form-control-textarea" rows="10" col='10' required></textarea>
												</div>
											</div>
                                            <div class="form-group row">
                                                <label for="first_name" class="control-label col-sm-3">File </label>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control"  name="dpic" required>
                                                    <small style="font-type:italics;">Pdf only</small>
                                                </div>
                                            </div>
											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="submit"
															class="btn btn-info m-r-20" name="submit">Submit</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
		</div>
		<!-- end page container -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
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
								<div class="page-title">All Class</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="dashboard.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Class</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">List class</li>
							</ol>
						</div>
					</div>
					   <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-red">
                                <div class="card-head">
                                    
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-scrollable">
                                        <table
                                            class="table table-striped table-bordered table-hover table-checkable order-column"
                                            style="width: 100%" id="example4">
                                            <thead>
                                                <tr>
                                                   
                                                    
                                                    <th width="50%"> Class Name</th>
                                                    <th> Class Content</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($list as $key => $list): ?>
                                                <tr class="odd gradeX">
                                                   
                                                    
                                                    
                                                    <td><?= $list->class_name; ?></td>
                                                    <td><?= $list->class_details; ?></td>
                                                </tr>
                                             <?php endforeach;?>
                                            </tbody>
                                        </table>
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